# Experian Businesses API Client
To updated the API Client package:

1. Get the latest spec from [Experian](https://developer.experian.com/products/us/businesses/businesses-api-docs).
2. Set up  [OpenAPI Generator](https://github.com/OpenAPITools/openapi-generator).
3. Run `openapi-generator-cli generate -i openapi.json -g php -o . -c config.json`.
4. Update composer.json to original authors/description, but new dependencies.
5. Copy the resultant files back to the git repo at https://github.com/thelogicstudio/ExperianBusinessesPHP, overwriting as appropriate.