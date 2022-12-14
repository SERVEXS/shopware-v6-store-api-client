# OpenAPIClient-php

This endpoint reference contains an overview of all endpoints comprising the Shopware Store API


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/servexs/shopware-v6-store-api-client.git"
    }
  ],
  "require": {
    "servexs/shopware-v6-store-api-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ApiKey
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-access-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-access-key', 'Bearer');

// Configure API key authorization: ContextToken
$config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKey('sw-context-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ServeXS\Shopware\v6\Store\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sw-context-token', 'Bearer');


$apiInstance = new ServeXS\Shopware\v6\Store\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'; // string | Content type of the request
$accept = 'application/json'; // string | Accepted response content types
$customer_address = new \ServeXS\Shopware\v6\Store\Model\CustomerAddress(); // \ServeXS\Shopware\v6\Store\Model\CustomerAddress

try {
    $result = $apiInstance->createCustomerAddress($content_type, $accept, $customer_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->createCustomerAddress: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost/store-api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddressApi* | [**createCustomerAddress**](docs/Api/AddressApi.md#createcustomeraddress) | **POST** /account/address | Create a new address for a customer
*AddressApi* | [**defaultBillingAddress**](docs/Api/AddressApi.md#defaultbillingaddress) | **PATCH** /account/address/default-billing/{addressId} | Change a customer&#39;s default billing address
*AddressApi* | [**defaultShippingAddress**](docs/Api/AddressApi.md#defaultshippingaddress) | **PATCH** /account/address/default-shipping/{addressId} | Change a customer&#39;s default shipping address
*AddressApi* | [**deleteCustomerAddress**](docs/Api/AddressApi.md#deletecustomeraddress) | **DELETE** /account/address/{addressId} | Delete an address of a customer
*AddressApi* | [**listAddress**](docs/Api/AddressApi.md#listaddress) | **POST** /account/list-address | Fetch addresses of a customer
*AddressApi* | [**updateCustomerAddress**](docs/Api/AddressApi.md#updatecustomeraddress) | **PATCH** /account/address/{addressId} | Modify an address of a customer
*CartApi* | [**addLineItem**](docs/Api/CartApi.md#addlineitem) | **POST** /checkout/cart/line-item | Add items to the cart
*CartApi* | [**deleteCart**](docs/Api/CartApi.md#deletecart) | **DELETE** /checkout/cart | Delete a cart
*CartApi* | [**readCart**](docs/Api/CartApi.md#readcart) | **GET** /checkout/cart | Fetch or create a cart
*CartApi* | [**removeLineItem**](docs/Api/CartApi.md#removelineitem) | **DELETE** /checkout/cart/line-item | Remove items from the cart
*CartApi* | [**updateLineItem**](docs/Api/CartApi.md#updatelineitem) | **PATCH** /checkout/cart/line-item | Update items in the cart
*CategoryApi* | [**readCategory**](docs/Api/CategoryApi.md#readcategory) | **POST** /category/{categoryId} | Fetch a single category
*CategoryApi* | [**readCategoryList**](docs/Api/CategoryApi.md#readcategorylist) | **POST** /category | Fetch a list of categories
*CategoryApi* | [**readNavigation**](docs/Api/CategoryApi.md#readnavigation) | **POST** /navigation/{requestActiveId}/{requestRootId} | Fetch a navigation menu
*ContentApi* | [**readCms**](docs/Api/ContentApi.md#readcms) | **POST** /cms/{id} | Fetch and resolve a CMS page
*ContentApi* | [**readLandingPage**](docs/Api/ContentApi.md#readlandingpage) | **POST** /landing-page/{landingPageId} | Fetch a landing page with the resolved CMS page
*ContentApi* | [**sendContactMail**](docs/Api/ContentApi.md#sendcontactmail) | **POST** /contact-form | Submit a contact form message
*EndpointsSupportingCriteriaApi* | [**listAddress**](docs/Api/EndpointsSupportingCriteriaApi.md#listaddress) | **POST** /account/list-address | Fetch addresses of a customer
*EndpointsSupportingCriteriaApi* | [**readCategory**](docs/Api/EndpointsSupportingCriteriaApi.md#readcategory) | **POST** /category/{categoryId} | Fetch a single category
*EndpointsSupportingCriteriaApi* | [**readCategoryList**](docs/Api/EndpointsSupportingCriteriaApi.md#readcategorylist) | **POST** /category | Fetch a list of categories
*EndpointsSupportingCriteriaApi* | [**readCountry**](docs/Api/EndpointsSupportingCriteriaApi.md#readcountry) | **POST** /country | Fetch countries
*EndpointsSupportingCriteriaApi* | [**readCurrency**](docs/Api/EndpointsSupportingCriteriaApi.md#readcurrency) | **POST** /currency | Fetch currencies
*EndpointsSupportingCriteriaApi* | [**readCustomer**](docs/Api/EndpointsSupportingCriteriaApi.md#readcustomer) | **POST** /account/customer | Get information about current customer
*EndpointsSupportingCriteriaApi* | [**readCustomerWishlist**](docs/Api/EndpointsSupportingCriteriaApi.md#readcustomerwishlist) | **POST** /customer/wishlist | Fetch a wishlist
*EndpointsSupportingCriteriaApi* | [**readLandingPage**](docs/Api/EndpointsSupportingCriteriaApi.md#readlandingpage) | **POST** /landing-page/{landingPageId} | Fetch a landing page with the resolved CMS page
*EndpointsSupportingCriteriaApi* | [**readLanguages**](docs/Api/EndpointsSupportingCriteriaApi.md#readlanguages) | **POST** /language | Fetch languages
*EndpointsSupportingCriteriaApi* | [**readNavigation**](docs/Api/EndpointsSupportingCriteriaApi.md#readnavigation) | **POST** /navigation/{requestActiveId}/{requestRootId} | Fetch a navigation menu
*EndpointsSupportingCriteriaApi* | [**readOrder**](docs/Api/EndpointsSupportingCriteriaApi.md#readorder) | **POST** /order | Fetch a list of orders
*EndpointsSupportingCriteriaApi* | [**readPaymentMethod**](docs/Api/EndpointsSupportingCriteriaApi.md#readpaymentmethod) | **POST** /payment-method | Loads all available payment methods
*EndpointsSupportingCriteriaApi* | [**readProduct**](docs/Api/EndpointsSupportingCriteriaApi.md#readproduct) | **POST** /product | Fetch a list of products
*EndpointsSupportingCriteriaApi* | [**readProductReviews**](docs/Api/EndpointsSupportingCriteriaApi.md#readproductreviews) | **POST** /product/{productId}/reviews | Fetch product reviews
*EndpointsSupportingCriteriaApi* | [**readSalutation**](docs/Api/EndpointsSupportingCriteriaApi.md#readsalutation) | **POST** /salutation | Fetch salutations
*EndpointsSupportingCriteriaApi* | [**readSeoUrl**](docs/Api/EndpointsSupportingCriteriaApi.md#readseourl) | **POST** /seo-url | Fetch SEO routes
*EndpointsSupportingCriteriaApi* | [**readShippingMethod**](docs/Api/EndpointsSupportingCriteriaApi.md#readshippingmethod) | **POST** /shipping-method | Fetch shipping methods
*LoginRegistrationApi* | [**getCustomerGroupRegistrationInfo**](docs/Api/LoginRegistrationApi.md#getcustomergroupregistrationinfo) | **GET** /customer-group-registration/config/{customerGroupId} | Fetch registration settings for customer group
*LoginRegistrationApi* | [**loginCustomer**](docs/Api/LoginRegistrationApi.md#logincustomer) | **POST** /account/login | Log in a customer
*LoginRegistrationApi* | [**logoutCustomer**](docs/Api/LoginRegistrationApi.md#logoutcustomer) | **POST** /account/logout | Log out a customer
*LoginRegistrationApi* | [**register**](docs/Api/LoginRegistrationApi.md#register) | **POST** /account/register | Register a customer
*LoginRegistrationApi* | [**registerConfirm**](docs/Api/LoginRegistrationApi.md#registerconfirm) | **POST** /account/register-confirm | Confirm a customer registration
*NewsletterApi* | [**confirmNewsletter**](docs/Api/NewsletterApi.md#confirmnewsletter) | **POST** /newsletter/confirm | Confirm a newsletter registration
*NewsletterApi* | [**subscribeToNewsletter**](docs/Api/NewsletterApi.md#subscribetonewsletter) | **POST** /newsletter/subscribe | Create or remove a newsletter subscription
*NewsletterApi* | [**unsubscribeToNewsletter**](docs/Api/NewsletterApi.md#unsubscribetonewsletter) | **POST** /newsletter/unsubscribe | Remove a newsletter subscription
*OrderApi* | [**cancelOrder**](docs/Api/OrderApi.md#cancelorder) | **POST** /order/state/cancel | Cancel an order
*OrderApi* | [**createOrder**](docs/Api/OrderApi.md#createorder) | **POST** /checkout/order | Create an order from a cart
*OrderApi* | [**orderSetPayment**](docs/Api/OrderApi.md#ordersetpayment) | **POST** /order/payment | Update the payment method of an order
*OrderApi* | [**readOrder**](docs/Api/OrderApi.md#readorder) | **POST** /order | Fetch a list of orders
*PaymentMethodApi* | [**readPaymentMethod**](docs/Api/PaymentMethodApi.md#readpaymentmethod) | **POST** /payment-method | Loads all available payment methods
*PaymentShippingApi* | [**handlePaymentMethod**](docs/Api/PaymentShippingApi.md#handlepaymentmethod) | **POST** /handle-payment | Initiate a payment for an order
*PaymentShippingApi* | [**readShippingMethod**](docs/Api/PaymentShippingApi.md#readshippingmethod) | **POST** /shipping-method | Fetch shipping methods
*ProductApi* | [**readProduct**](docs/Api/ProductApi.md#readproduct) | **POST** /product | Fetch a list of products
*ProductApi* | [**readProductCrossSellings**](docs/Api/ProductApi.md#readproductcrosssellings) | **POST** /product/{productId}/cross-selling | Fetch cross-selling groups of a product
*ProductApi* | [**readProductDetail**](docs/Api/ProductApi.md#readproductdetail) | **POST** /product/{productId} | Fetch a single product
*ProductApi* | [**readProductExport**](docs/Api/ProductApi.md#readproductexport) | **GET** /product-export/{accessKey}/{fileName} | Export product export
*ProductApi* | [**readProductListing**](docs/Api/ProductApi.md#readproductlisting) | **POST** /product-listing/{categoryId} | Fetch a product listing by category
*ProductApi* | [**readProductReviews**](docs/Api/ProductApi.md#readproductreviews) | **POST** /product/{productId}/reviews | Fetch product reviews
*ProductApi* | [**saveProductReview**](docs/Api/ProductApi.md#saveproductreview) | **POST** /product/{productId}/review | Save a product review
*ProductApi* | [**searchPage**](docs/Api/ProductApi.md#searchpage) | **POST** /search | Search for products
*ProductApi* | [**searchSuggest**](docs/Api/ProductApi.md#searchsuggest) | **POST** /search-suggest | Search for products (suggest)
*ProfileApi* | [**changeEmail**](docs/Api/ProfileApi.md#changeemail) | **POST** /account/change-email | Change the customer&#39;s email address
*ProfileApi* | [**changePassword**](docs/Api/ProfileApi.md#changepassword) | **POST** /account/change-password | Change the customer&#39;s password
*ProfileApi* | [**changePaymentMethod**](docs/Api/ProfileApi.md#changepaymentmethod) | **POST** /account/change-payment-method/{paymentMethodId} | Change the customer&#39;s default payment method
*ProfileApi* | [**changeProfile**](docs/Api/ProfileApi.md#changeprofile) | **POST** /account/change-profile | Change the customer&#39;s information
*ProfileApi* | [**deleteCustomer**](docs/Api/ProfileApi.md#deletecustomer) | **DELETE** /account/customer | Delete the customer&#39;s profile
*ProfileApi* | [**readCustomer**](docs/Api/ProfileApi.md#readcustomer) | **POST** /account/customer | Get information about current customer
*ProfileApi* | [**recoveryPassword**](docs/Api/ProfileApi.md#recoverypassword) | **POST** /account/recovery-password-confirm | Reset a password with recovery credentials
*ProfileApi* | [**sendRecoveryMail**](docs/Api/ProfileApi.md#sendrecoverymail) | **POST** /account/recovery-password | Send a password recovery mail
*SitemapRoutesApi* | [**readSeoUrl**](docs/Api/SitemapRoutesApi.md#readseourl) | **POST** /seo-url | Fetch SEO routes
*SitemapRoutesApi* | [**readSitemap**](docs/Api/SitemapRoutesApi.md#readsitemap) | **GET** /sitemap | Fetch sitemaps
*SystemContextApi* | [**readContext**](docs/Api/SystemContextApi.md#readcontext) | **GET** /context | Fetch the current context
*SystemContextApi* | [**readCountry**](docs/Api/SystemContextApi.md#readcountry) | **POST** /country | Fetch countries
*SystemContextApi* | [**readCurrency**](docs/Api/SystemContextApi.md#readcurrency) | **POST** /currency | Fetch currencies
*SystemContextApi* | [**readLanguages**](docs/Api/SystemContextApi.md#readlanguages) | **POST** /language | Fetch languages
*SystemContextApi* | [**readSalutation**](docs/Api/SystemContextApi.md#readsalutation) | **POST** /salutation | Fetch salutations
*SystemContextApi* | [**updateContext**](docs/Api/SystemContextApi.md#updatecontext) | **PATCH** /context | Modify the current context
*WishlistApi* | [**addProductOnWishlist**](docs/Api/WishlistApi.md#addproductonwishlist) | **POST** /customer/wishlist/add/{productId} | Add a product to a wishlist
*WishlistApi* | [**deleteProductOnWishlist**](docs/Api/WishlistApi.md#deleteproductonwishlist) | **DELETE** /customer/wishlist/delete/{productId} | Remove a product from a wishlist
*WishlistApi* | [**mergeProductOnWishlist**](docs/Api/WishlistApi.md#mergeproductonwishlist) | **POST** /customer/wishlist/merge | Create a wishlist for a customer
*WishlistApi* | [**readCustomerWishlist**](docs/Api/WishlistApi.md#readcustomerwishlist) | **POST** /customer/wishlist | Fetch a wishlist

## Models

- [AclRole](docs/Model/AclRole.md)
- [App](docs/Model/App.md)
- [AppActionButton](docs/Model/AppActionButton.md)
- [AppPaymentMethod](docs/Model/AppPaymentMethod.md)
- [AppTemplate](docs/Model/AppTemplate.md)
- [ArrayStruct](docs/Model/ArrayStruct.md)
- [Cart](docs/Model/Cart.md)
- [CartAllOf](docs/Model/CartAllOf.md)
- [CartAllOfErrors](docs/Model/CartAllOfErrors.md)
- [CartAllOfPrice](docs/Model/CartAllOfPrice.md)
- [CartAllOfTransactions](docs/Model/CartAllOfTransactions.md)
- [CartItems](docs/Model/CartItems.md)
- [CartItemsAllOf](docs/Model/CartItemsAllOf.md)
- [Category](docs/Model/Category.md)
- [CategoryJsonApi](docs/Model/CategoryJsonApi.md)
- [CategoryJsonApiAllOf](docs/Model/CategoryJsonApiAllOf.md)
- [CmsBlock](docs/Model/CmsBlock.md)
- [CmsPage](docs/Model/CmsPage.md)
- [CmsPageConfig](docs/Model/CmsPageConfig.md)
- [CmsSection](docs/Model/CmsSection.md)
- [CmsSlot](docs/Model/CmsSlot.md)
- [ContextTokenResponse](docs/Model/ContextTokenResponse.md)
- [Country](docs/Model/Country.md)
- [CountryJsonApi](docs/Model/CountryJsonApi.md)
- [CountryJsonApiAllOf](docs/Model/CountryJsonApiAllOf.md)
- [CountryState](docs/Model/CountryState.md)
- [CountryStateJsonApi](docs/Model/CountryStateJsonApi.md)
- [CountryStateJsonApiAllOf](docs/Model/CountryStateJsonApiAllOf.md)
- [Criteria](docs/Model/Criteria.md)
- [CriteriaAggregations](docs/Model/CriteriaAggregations.md)
- [CriteriaFilter](docs/Model/CriteriaFilter.md)
- [CriteriaSort](docs/Model/CriteriaSort.md)
- [Currency](docs/Model/Currency.md)
- [CurrencyCountryRounding](docs/Model/CurrencyCountryRounding.md)
- [CurrencyJsonApi](docs/Model/CurrencyJsonApi.md)
- [CurrencyJsonApiAllOf](docs/Model/CurrencyJsonApiAllOf.md)
- [CustomField](docs/Model/CustomField.md)
- [CustomFieldSet](docs/Model/CustomFieldSet.md)
- [CustomFieldSetRelation](docs/Model/CustomFieldSetRelation.md)
- [Customer](docs/Model/Customer.md)
- [CustomerAddress](docs/Model/CustomerAddress.md)
- [CustomerGroup](docs/Model/CustomerGroup.md)
- [CustomerRecovery](docs/Model/CustomerRecovery.md)
- [CustomerTag](docs/Model/CustomerTag.md)
- [CustomerWishlist](docs/Model/CustomerWishlist.md)
- [CustomerWishlistProduct](docs/Model/CustomerWishlistProduct.md)
- [Data](docs/Model/Data.md)
- [DeadMessage](docs/Model/DeadMessage.md)
- [DeliveryTime](docs/Model/DeliveryTime.md)
- [Document](docs/Model/Document.md)
- [DocumentBaseConfig](docs/Model/DocumentBaseConfig.md)
- [DocumentBaseConfigSalesChannel](docs/Model/DocumentBaseConfigSalesChannel.md)
- [DocumentType](docs/Model/DocumentType.md)
- [EntitySearchResult](docs/Model/EntitySearchResult.md)
- [EntitySearchResultAllOf](docs/Model/EntitySearchResultAllOf.md)
- [Error](docs/Model/Error.md)
- [ErrorSource](docs/Model/ErrorSource.md)
- [EventAction](docs/Model/EventAction.md)
- [Failure](docs/Model/Failure.md)
- [ImportExportFile](docs/Model/ImportExportFile.md)
- [ImportExportLog](docs/Model/ImportExportLog.md)
- [ImportExportProfile](docs/Model/ImportExportProfile.md)
- [Info](docs/Model/Info.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineObject10](docs/Model/InlineObject10.md)
- [InlineObject11](docs/Model/InlineObject11.md)
- [InlineObject12](docs/Model/InlineObject12.md)
- [InlineObject13](docs/Model/InlineObject13.md)
- [InlineObject14](docs/Model/InlineObject14.md)
- [InlineObject15](docs/Model/InlineObject15.md)
- [InlineObject16](docs/Model/InlineObject16.md)
- [InlineObject17](docs/Model/InlineObject17.md)
- [InlineObject18](docs/Model/InlineObject18.md)
- [InlineObject2](docs/Model/InlineObject2.md)
- [InlineObject3](docs/Model/InlineObject3.md)
- [InlineObject4](docs/Model/InlineObject4.md)
- [InlineObject5](docs/Model/InlineObject5.md)
- [InlineObject6](docs/Model/InlineObject6.md)
- [InlineObject7](docs/Model/InlineObject7.md)
- [InlineObject8](docs/Model/InlineObject8.md)
- [InlineObject9](docs/Model/InlineObject9.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [Integration](docs/Model/Integration.md)
- [Jsonapi](docs/Model/Jsonapi.md)
- [LandingPage](docs/Model/LandingPage.md)
- [LandingPageJsonApi](docs/Model/LandingPageJsonApi.md)
- [LandingPageJsonApiAllOf](docs/Model/LandingPageJsonApiAllOf.md)
- [Language](docs/Model/Language.md)
- [LanguageJsonApi](docs/Model/LanguageJsonApi.md)
- [LanguageJsonApiAllOf](docs/Model/LanguageJsonApiAllOf.md)
- [LineItem](docs/Model/LineItem.md)
- [Link](docs/Model/Link.md)
- [LinkOneOf](docs/Model/LinkOneOf.md)
- [Linkage](docs/Model/Linkage.md)
- [Locale](docs/Model/Locale.md)
- [LogEntry](docs/Model/LogEntry.md)
- [MailHeaderFooter](docs/Model/MailHeaderFooter.md)
- [MailTemplate](docs/Model/MailTemplate.md)
- [MailTemplateMedia](docs/Model/MailTemplateMedia.md)
- [MailTemplateType](docs/Model/MailTemplateType.md)
- [MainCategory](docs/Model/MainCategory.md)
- [MainCategoryJsonApi](docs/Model/MainCategoryJsonApi.md)
- [MainCategoryJsonApiAllOf](docs/Model/MainCategoryJsonApiAllOf.md)
- [Media](docs/Model/Media.md)
- [MediaDefaultFolder](docs/Model/MediaDefaultFolder.md)
- [MediaFolder](docs/Model/MediaFolder.md)
- [MediaFolderConfiguration](docs/Model/MediaFolderConfiguration.md)
- [MediaTag](docs/Model/MediaTag.md)
- [MediaThumbnail](docs/Model/MediaThumbnail.md)
- [MediaThumbnailSize](docs/Model/MediaThumbnailSize.md)
- [MessageQueueStats](docs/Model/MessageQueueStats.md)
- [NewsletterRecipient](docs/Model/NewsletterRecipient.md)
- [NumberRange](docs/Model/NumberRange.md)
- [NumberRangeSalesChannel](docs/Model/NumberRangeSalesChannel.md)
- [NumberRangeState](docs/Model/NumberRangeState.md)
- [NumberRangeType](docs/Model/NumberRangeType.md)
- [Order](docs/Model/Order.md)
- [OrderAddress](docs/Model/OrderAddress.md)
- [OrderCustomer](docs/Model/OrderCustomer.md)
- [OrderDelivery](docs/Model/OrderDelivery.md)
- [OrderDeliveryPosition](docs/Model/OrderDeliveryPosition.md)
- [OrderLineItem](docs/Model/OrderLineItem.md)
- [OrderPrice](docs/Model/OrderPrice.md)
- [OrderRouteResponse](docs/Model/OrderRouteResponse.md)
- [OrderShippingCosts](docs/Model/OrderShippingCosts.md)
- [OrderShippingCostsListPrice](docs/Model/OrderShippingCostsListPrice.md)
- [OrderTag](docs/Model/OrderTag.md)
- [OrderTransaction](docs/Model/OrderTransaction.md)
- [Pagination](docs/Model/Pagination.md)
- [PaymentMethod](docs/Model/PaymentMethod.md)
- [PaymentMethodJsonApi](docs/Model/PaymentMethodJsonApi.md)
- [PaymentMethodJsonApiAllOf](docs/Model/PaymentMethodJsonApiAllOf.md)
- [Plugin](docs/Model/Plugin.md)
- [Product](docs/Model/Product.md)
- [ProductConfiguratorSetting](docs/Model/ProductConfiguratorSetting.md)
- [ProductCrossSelling](docs/Model/ProductCrossSelling.md)
- [ProductCrossSellingAssignedProducts](docs/Model/ProductCrossSellingAssignedProducts.md)
- [ProductDetailResponse](docs/Model/ProductDetailResponse.md)
- [ProductExport](docs/Model/ProductExport.md)
- [ProductFeatureSet](docs/Model/ProductFeatureSet.md)
- [ProductJsonApi](docs/Model/ProductJsonApi.md)
- [ProductJsonApiAllOf](docs/Model/ProductJsonApiAllOf.md)
- [ProductKeywordDictionary](docs/Model/ProductKeywordDictionary.md)
- [ProductListingCriteria](docs/Model/ProductListingCriteria.md)
- [ProductListingCriteriaAllOf](docs/Model/ProductListingCriteriaAllOf.md)
- [ProductListingFlags](docs/Model/ProductListingFlags.md)
- [ProductListingResult](docs/Model/ProductListingResult.md)
- [ProductListingResultAllOf](docs/Model/ProductListingResultAllOf.md)
- [ProductListingResultAllOfCurrentFilters](docs/Model/ProductListingResultAllOfCurrentFilters.md)
- [ProductListingResultAllOfCurrentFiltersPrice](docs/Model/ProductListingResultAllOfCurrentFiltersPrice.md)
- [ProductManufacturer](docs/Model/ProductManufacturer.md)
- [ProductMedia](docs/Model/ProductMedia.md)
- [ProductPrice](docs/Model/ProductPrice.md)
- [ProductReview](docs/Model/ProductReview.md)
- [ProductSearchConfig](docs/Model/ProductSearchConfig.md)
- [ProductSearchConfigField](docs/Model/ProductSearchConfigField.md)
- [ProductSearchKeyword](docs/Model/ProductSearchKeyword.md)
- [ProductSorting](docs/Model/ProductSorting.md)
- [ProductStream](docs/Model/ProductStream.md)
- [ProductStreamFilter](docs/Model/ProductStreamFilter.md)
- [ProductVisibility](docs/Model/ProductVisibility.md)
- [Promotion](docs/Model/Promotion.md)
- [PromotionDiscount](docs/Model/PromotionDiscount.md)
- [PromotionDiscountPrices](docs/Model/PromotionDiscountPrices.md)
- [PromotionIndividualCode](docs/Model/PromotionIndividualCode.md)
- [PromotionSalesChannel](docs/Model/PromotionSalesChannel.md)
- [PromotionSetgroup](docs/Model/PromotionSetgroup.md)
- [PropertyGroup](docs/Model/PropertyGroup.md)
- [PropertyGroupOption](docs/Model/PropertyGroupOption.md)
- [RelationshipLinks](docs/Model/RelationshipLinks.md)
- [RelationshipToOne](docs/Model/RelationshipToOne.md)
- [Relationships](docs/Model/Relationships.md)
- [RelationshipsAnyOf](docs/Model/RelationshipsAnyOf.md)
- [Resource](docs/Model/Resource.md)
- [Rule](docs/Model/Rule.md)
- [RuleCondition](docs/Model/RuleCondition.md)
- [SalesChannel](docs/Model/SalesChannel.md)
- [SalesChannelAnalytics](docs/Model/SalesChannelAnalytics.md)
- [SalesChannelContext](docs/Model/SalesChannelContext.md)
- [SalesChannelContextAllOf](docs/Model/SalesChannelContextAllOf.md)
- [SalesChannelContextAllOfContext](docs/Model/SalesChannelContextAllOfContext.md)
- [SalesChannelContextAllOfCurrency](docs/Model/SalesChannelContextAllOfCurrency.md)
- [SalesChannelContextAllOfCurrentCustomerGroup](docs/Model/SalesChannelContextAllOfCurrentCustomerGroup.md)
- [SalesChannelContextAllOfCustomer](docs/Model/SalesChannelContextAllOfCustomer.md)
- [SalesChannelContextAllOfFallbackCustomerGroup](docs/Model/SalesChannelContextAllOfFallbackCustomerGroup.md)
- [SalesChannelContextAllOfPaymentMethod](docs/Model/SalesChannelContextAllOfPaymentMethod.md)
- [SalesChannelContextAllOfSalesChannel](docs/Model/SalesChannelContextAllOfSalesChannel.md)
- [SalesChannelContextAllOfShippingMethod](docs/Model/SalesChannelContextAllOfShippingMethod.md)
- [SalesChannelContextAllOfTaxRules](docs/Model/SalesChannelContextAllOfTaxRules.md)
- [SalesChannelDomain](docs/Model/SalesChannelDomain.md)
- [SalesChannelType](docs/Model/SalesChannelType.md)
- [Salutation](docs/Model/Salutation.md)
- [SalutationJsonApi](docs/Model/SalutationJsonApi.md)
- [SalutationJsonApiAllOf](docs/Model/SalutationJsonApiAllOf.md)
- [ScheduledTask](docs/Model/ScheduledTask.md)
- [SeoUrl](docs/Model/SeoUrl.md)
- [SeoUrlJsonApi](docs/Model/SeoUrlJsonApi.md)
- [SeoUrlJsonApiAllOf](docs/Model/SeoUrlJsonApiAllOf.md)
- [SeoUrlTemplate](docs/Model/SeoUrlTemplate.md)
- [ShippingMethod](docs/Model/ShippingMethod.md)
- [ShippingMethodJsonApi](docs/Model/ShippingMethodJsonApi.md)
- [ShippingMethodJsonApiAllOf](docs/Model/ShippingMethodJsonApiAllOf.md)
- [ShippingMethodPrice](docs/Model/ShippingMethodPrice.md)
- [Sitemap](docs/Model/Sitemap.md)
- [SitemapAllOf](docs/Model/SitemapAllOf.md)
- [Snippet](docs/Model/Snippet.md)
- [SnippetSet](docs/Model/SnippetSet.md)
- [StateMachine](docs/Model/StateMachine.md)
- [StateMachineHistory](docs/Model/StateMachineHistory.md)
- [StateMachineState](docs/Model/StateMachineState.md)
- [StateMachineTransition](docs/Model/StateMachineTransition.md)
- [Success](docs/Model/Success.md)
- [SuccessResponse](docs/Model/SuccessResponse.md)
- [SystemConfig](docs/Model/SystemConfig.md)
- [SystemConfigConfigurationValue](docs/Model/SystemConfigConfigurationValue.md)
- [Tag](docs/Model/Tag.md)
- [Tax](docs/Model/Tax.md)
- [TaxRule](docs/Model/TaxRule.md)
- [TaxRuleType](docs/Model/TaxRuleType.md)
- [Theme](docs/Model/Theme.md)
- [Unit](docs/Model/Unit.md)
- [User](docs/Model/User.md)
- [UserAccessKey](docs/Model/UserAccessKey.md)
- [UserConfig](docs/Model/UserConfig.md)
- [UserRecovery](docs/Model/UserRecovery.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookEventLog](docs/Model/WebhookEventLog.md)
- [WishlistLoadRouteResponse](docs/Model/WishlistLoadRouteResponse.md)
- [WishlistLoadRouteResponseWishlist](docs/Model/WishlistLoadRouteResponseWishlist.md)

## Authorization

### ApiKey

- **Type**: API key
- **API key parameter name**: sw-access-key
- **Location**: HTTP header



### ContextToken

- **Type**: API key
- **API key parameter name**: sw-context-token
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `6.4.9999999.9999999-dev`
    - Package version: `1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
