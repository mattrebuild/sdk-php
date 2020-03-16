# SwaggerClient-php
# API Intro  Insert the intro documentation here.  The client claims API provides an integration point for Xactimate clients to create and manage insurance claims within the Xactimate One system.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.1.8
- Build package: io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [http://www.xactware.com](http://www.xactware.com)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/xactimate-one/sdk-php.git"
    }
  ],
  "require": {
    "xactimate-one/sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->docsGet();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->docsGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**docsGet**](docs/Api/DefaultApi.md#docsget) | **GET** /docs | 
*DefaultApi* | [**rootGet**](docs/Api/DefaultApi.md#rootget) | **GET** / | 
*ProjectManagersApi* | [**addProjectManagerToProject**](docs/Api/ProjectManagersApi.md#addprojectmanagertoproject) | **PUT** /projects/open/{project-id}/project-managers/{project-manager-email} | Assign a project manager
*ProjectManagersApi* | [**removeProjectManagerFromProject**](docs/Api/ProjectManagersApi.md#removeprojectmanagerfromproject) | **DELETE** /projects/open/{project-id}/project-managers/{project-manager-email} | Remove a project manager
*ProjectRolesApi* | [**addUserToOpenProjectRole**](docs/Api/ProjectRolesApi.md#addusertoopenprojectrole) | **PUT** /projects/open/{project-id}/roles/{role-id}/{role-user-email} | Assign a project role
*ProjectRolesApi* | [**getProjectRoles**](docs/Api/ProjectRolesApi.md#getprojectroles) | **GET** /projects/roles | Project roles
*ProjectRolesApi* | [**removeUserFromOpenProjectRole**](docs/Api/ProjectRolesApi.md#removeuserfromopenprojectrole) | **DELETE** /projects/open/{project-id}/roles/{role-id}/{role-user-email} | Remove a project role
*ProjectsApi* | [**addToCanceledProjects**](docs/Api/ProjectsApi.md#addtocanceledprojects) | **POST** /projects/canceled | Canceled projects
*ProjectsApi* | [**addToCompletedProjects**](docs/Api/ProjectsApi.md#addtocompletedprojects) | **POST** /projects/completed | Completed projects
*ProjectsApi* | [**addToOpenProjects**](docs/Api/ProjectsApi.md#addtoopenprojects) | **POST** /projects/open | Open projects
*PropertyClaimsApi* | [**createPropertyClaim**](docs/Api/PropertyClaimsApi.md#createpropertyclaim) | **POST** /property/claims | Create a new property claim
*PropertyClaimsApi* | [**updatePropertyClaim**](docs/Api/PropertyClaimsApi.md#updatepropertyclaim) | **PUT** /property/claims/{claim-id} | Update a property claim
*PropertyCoveragesApi* | [**getPropertyPolicyCoverageAdditionalCoverages**](docs/Api/PropertyCoveragesApi.md#getpropertypolicycoverageadditionalcoverages) | **GET** /property/policies/coverages/{coverage-id}/additional-coverages | Property policy additional coverages
*PropertyCoveragesApi* | [**getPropertyPolicyCoverageSublimits**](docs/Api/PropertyCoveragesApi.md#getpropertypolicycoveragesublimits) | **GET** /property/policies/coverages/{coverage-id}/sublimits | Property policy sublimits
*PropertyCoveragesApi* | [**getPropertyPolicyCoverages**](docs/Api/PropertyCoveragesApi.md#getpropertypolicycoverages) | **GET** /property/policies/coverages | Property policy coverages
*PropertyEstimatesApi* | [**createPropertyEstimate**](docs/Api/PropertyEstimatesApi.md#createpropertyestimate) | **POST** /property/estimates | Create a new property estimate
*PropertyPerilsApi* | [**getPropertyPolicyPerilCausesOfLoss**](docs/Api/PropertyPerilsApi.md#getpropertypolicyperilcausesofloss) | **GET** /property/policies/perils/{peril-id}/causes-of-loss | Cause of loss
*PropertyPerilsApi* | [**getPropertyPolicyPerils**](docs/Api/PropertyPerilsApi.md#getpropertypolicyperils) | **GET** /property/policies/perils | Types of loss
*TemplatesApi* | [**getTemplates**](docs/Api/TemplatesApi.md#gettemplates) | **GET** /templates | Get available templates


## Documentation For Models

 - [AdditionalCoverage](docs/Model/AdditionalCoverage.md)
 - [AdditionalCoverages](docs/Model/AdditionalCoverages.md)
 - [Address](docs/Model/Address.md)
 - [Body](docs/Model/Body.md)
 - [Body1](docs/Model/Body1.md)
 - [Body2](docs/Model/Body2.md)
 - [CauseOfLoss](docs/Model/CauseOfLoss.md)
 - [CauseOfLossMetadata](docs/Model/CauseOfLossMetadata.md)
 - [CausesOfLoss](docs/Model/CausesOfLoss.md)
 - [CausesOfLoss1](docs/Model/CausesOfLoss1.md)
 - [Claim](docs/Model/Claim.md)
 - [Contact](docs/Model/Contact.md)
 - [Coverage](docs/Model/Coverage.md)
 - [Coverages](docs/Model/Coverages.md)
 - [Error](docs/Model/Error.md)
 - [InlineResponse302](docs/Model/InlineResponse302.md)
 - [InlineResponse409](docs/Model/InlineResponse409.md)
 - [Links](docs/Model/Links.md)
 - [PerilMetadata](docs/Model/PerilMetadata.md)
 - [PerilMetadata1](docs/Model/PerilMetadata1.md)
 - [Perils](docs/Model/Perils.md)
 - [Perils1](docs/Model/Perils1.md)
 - [PhoneNumber](docs/Model/PhoneNumber.md)
 - [ProjectReference](docs/Model/ProjectReference.md)
 - [PropertyClaimClaimInfo](docs/Model/PropertyClaimClaimInfo.md)
 - [PropertyClaimPersonnel](docs/Model/PropertyClaimPersonnel.md)
 - [PropertyClaimPolicyInfo](docs/Model/PropertyClaimPolicyInfo.md)
 - [PropertyClaimRequestCreate](docs/Model/PropertyClaimRequestCreate.md)
 - [PropertyClaimRequestCreate1](docs/Model/PropertyClaimRequestCreate1.md)
 - [PropertyClaimRequestUpdate](docs/Model/PropertyClaimRequestUpdate.md)
 - [PropertyClaimResponse](docs/Model/PropertyClaimResponse.md)
 - [PropertyCoverageAdditionalCoverageMetadata](docs/Model/PropertyCoverageAdditionalCoverageMetadata.md)
 - [PropertyCoverageAdditionalCoverages](docs/Model/PropertyCoverageAdditionalCoverages.md)
 - [PropertyCoverageMetadata](docs/Model/PropertyCoverageMetadata.md)
 - [PropertyCoverageSublimitMetadata](docs/Model/PropertyCoverageSublimitMetadata.md)
 - [PropertyCoverageSublimits](docs/Model/PropertyCoverageSublimits.md)
 - [PropertyCoverages](docs/Model/PropertyCoverages.md)
 - [PropertyEstimateRequestCreate](docs/Model/PropertyEstimateRequestCreate.md)
 - [PropertyEstimateRequestCreate1](docs/Model/PropertyEstimateRequestCreate1.md)
 - [PropertyEstimateResponse](docs/Model/PropertyEstimateResponse.md)
 - [PropertyEstimateResponse1](docs/Model/PropertyEstimateResponse1.md)
 - [PropertyclaimsClaimInfo](docs/Model/PropertyclaimsClaimInfo.md)
 - [PropertyclaimsPersonnel](docs/Model/PropertyclaimsPersonnel.md)
 - [PropertyclaimsPersonnelAgency](docs/Model/PropertyclaimsPersonnelAgency.md)
 - [PropertyclaimsPersonnelAgencyAddress](docs/Model/PropertyclaimsPersonnelAgencyAddress.md)
 - [PropertyclaimsPersonnelAgencyPhoneNumbers](docs/Model/PropertyclaimsPersonnelAgencyPhoneNumbers.md)
 - [PropertyclaimsPolicyInfo](docs/Model/PropertyclaimsPolicyInfo.md)
 - [PropertyclaimsPolicyInfoAdditionalCoverages](docs/Model/PropertyclaimsPolicyInfoAdditionalCoverages.md)
 - [PropertyclaimsPolicyInfoCoverages](docs/Model/PropertyclaimsPolicyInfoCoverages.md)
 - [PropertyclaimsPolicyInfoPolicyHolder](docs/Model/PropertyclaimsPolicyInfoPolicyHolder.md)
 - [PropertyclaimsPolicyInfoSublimits](docs/Model/PropertyclaimsPolicyInfoSublimits.md)
 - [Role](docs/Model/Role.md)
 - [RoleMetadata](docs/Model/RoleMetadata.md)
 - [Roles](docs/Model/Roles.md)
 - [Roles1](docs/Model/Roles1.md)
 - [Sublimit](docs/Model/Sublimit.md)
 - [Sublimits](docs/Model/Sublimits.md)
 - [TemplateMetadata](docs/Model/TemplateMetadata.md)
 - [TemplateMetadata1](docs/Model/TemplateMetadata1.md)
 - [Templates](docs/Model/Templates.md)
 - [Templates1](docs/Model/Templates1.md)
 - [UpdateClaimRequest](docs/Model/UpdateClaimRequest.md)


## Documentation For Authorization


## api-authorizer

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header

## api-key

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header


## Author

contact@xactware.com


