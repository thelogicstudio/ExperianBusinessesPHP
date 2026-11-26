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
5. Update composer.json to original authors/description, but new dependencies.
6. Copy the resultant files back to the git repo at https://github.com/thelogicstudio/ExperianBusinessesPHP, overwriting as appropriate.