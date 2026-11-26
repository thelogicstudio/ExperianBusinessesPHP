# Experian Businesses API Client
To updated the API Client package:

1. Get the latest spec from [Experian](https://developer.experian.com/products/us/businesses/businesses-api-docs).
2. Update the spec to remove the superfluous 'Content-Type' paramter on every request:
   1. Remove the `Content-Type` and `x-comments` parameters from the 'requestBody' object using [yq](https://github.com/mikefarah/yq).
    ```
   yq 'del(.. | select(tag == "!!map") | select(.in == "header" and (.name == "Content-Type" or .name == "x-comments")))' businesses_swagger.yaml > clean.yaml
    ```
3. Set up  [OpenAPI Generator](https://github.com/OpenAPITools/openapi-generator).
4. Run `openapi-generator-cli generate -i clean.yaml -g php -o . -c config.json`.
   - `config.json` sets `templateDir` to `templates`, which overrides some of the generator's stock templates (taken from v7.17.0). Passing `-t templates` does the same thing.
     - `ObjectSerializer.mustache`: when an array is expected but the API returns a string that isn't a JSON array, deserialize it as an empty array. Experian does this on QuickSearch, returning `"results": "Your search did not match any records."` when nothing matches.
     - `composer.mustache`: hard-codes our package description, keywords, homepage and authors (the stock template takes the description from the API spec).
   - `.openapi-generator-ignore` stops `.gitignore` being overwritten.
   - If you upgrade the generator version, re-copy those stock templates from the new version (`modules/openapi-generator/src/main/resources/php/` on GitHub), re-apply the changes above, and check for new dependencies in `composer.mustache`.
5. Copy the resultant files back to the git repo at https://github.com/thelogicstudio/ExperianBusinessesPHP, overwriting as appropriate.