<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit01de33511194b7f2dcf04c43a4520c42
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LiveChat\\' => 9,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LiveChat\\' => 
        array (
            0 => __DIR__ . '/../..' . '/plugin_files',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Elementor\\LiveChatContactButtonWidget' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Widgets/LiveChatContactButtonWidget.class.php',
        'Elementor\\LiveChatQualityBadgeWidget' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Widgets/LiveChatQualityBadgeWidget.class.php',
        'LiveChat\\Drivers\\HttpClient' => __DIR__ . '/../..' . '/plugin_files/Drivers/HttpClient.class.php',
        'LiveChat\\Drivers\\HttpClientTest' => __DIR__ . '/../..' . '/plugin_files/tests/drivers/HttpClientTest.class.php',
        'LiveChat\\Drivers\\WP_Error' => __DIR__ . '/../..' . '/plugin_files/tests/drivers/HttpClientTest.class.php',
        'LiveChat\\Exceptions\\ApiClientException' => __DIR__ . '/../..' . '/plugin_files/Exceptions/ApiClientException.class.php',
        'LiveChat\\Exceptions\\ErrorCodes' => __DIR__ . '/../..' . '/plugin_files/Exceptions/ErrorCode.class.php',
        'LiveChat\\Exceptions\\HttpClientException' => __DIR__ . '/../..' . '/plugin_files/Exceptions/HttpClientException.class.php',
        'LiveChat\\Exceptions\\InvalidTokenException' => __DIR__ . '/../..' . '/plugin_files/Exceptions/InvalidTokenException.class.php',
        'LiveChat\\LiveChat' => __DIR__ . '/../..' . '/plugin_files/LiveChat.class.php',
        'LiveChat\\LiveChatAdmin' => __DIR__ . '/../..' . '/plugin_files/LiveChatAdmin.class.php',
        'LiveChat\\Services\\ApiClient' => __DIR__ . '/../..' . '/plugin_files/Services/ApiClient.class.php',
        'LiveChat\\Services\\ApiClientTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/ApiClientTest.class.php',
        'LiveChat\\Services\\CertProvider' => __DIR__ . '/../..' . '/plugin_files/Services/CertProvider.class.php',
        'LiveChat\\Services\\CertProviderTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/CertProviderTest.class.php',
        'LiveChat\\Services\\ConfirmIdentityNoticeTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/notifications/ConfirmIdentityNoticeTest.class.php',
        'LiveChat\\Services\\ConnectNoticeTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/notifications/ConnectNoticeTest.class.php',
        'LiveChat\\Services\\ConnectToken' => __DIR__ . '/../..' . '/plugin_files/Services/ConnectToken.class.php',
        'LiveChat\\Services\\ConnectTokenProvider' => __DIR__ . '/../..' . '/plugin_files/Services/ConnectTokenProvider.class.php',
        'LiveChat\\Services\\ConnectTokenProviderTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/ConnectTokenProviderTest.class.php',
        'LiveChat\\Services\\ConnectTokenTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/ConnectTokenTest.class.php',
        'LiveChat\\Services\\DeactivationModalTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/notifications/DeactivationModalTest.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\ContactButtonWidgetDependencies' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Dependencies/ContactButtonWidgetDependencies.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\QualityBadgeWidgetDependencies' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Dependencies/QualityBadgeWidgetDependencies.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\Scripts\\ContactButtonScriptDependency' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Dependencies/Scripts/ContactButtonScriptDependency.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\Scripts\\QualityBadgeScriptDependency' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Dependencies/Scripts/QualityBadgeScriptDependency.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\Scripts\\ScriptDependency' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Dependencies/Scripts/ScriptDependency.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\Scripts\\ScriptDependencyTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/elementor/dependencies/scripts/ScriptDependencyTest.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\Styles\\ContactButtonStyleDependency' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Dependencies/Styles/ContactButtonStyleDependency.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\Styles\\QualityBadgeStyleDependency' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Dependencies/Styles/QualityBadgeStyleDependency.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\Styles\\StyleDependency' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Dependencies/Styles/StyleDependency.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\Styles\\StyleDependencyTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/elementor/dependencies/styles/StyleDependencyTest.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\WidgetDependencies' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Dependencies/WidgetDependencies.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\WidgetDependenciesTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/elementor/dependencies/WidgetDependenciesTest.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\WidgetDependenciesTestWidget' => __DIR__ . '/../..' . '/plugin_files/tests/services/elementor/dependencies/WidgetDependenciesTest.class.php',
        'LiveChat\\Services\\Elementor\\Dependencies\\WidgetDependenciesTestWidgetsManager' => __DIR__ . '/../..' . '/plugin_files/tests/services/elementor/dependencies/WidgetDependenciesTest.class.php',
        'LiveChat\\Services\\Elementor\\ElementorWidgetsProvider' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/ElementorWidgetsProvider.class.php',
        'LiveChat\\Services\\Elementor\\ElementorWidgetsProviderTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/elementor/ElementorWidgetsProviderTest.class.php',
        'LiveChat\\Services\\Elementor\\Factories\\ElementorWidgetsFactory' => __DIR__ . '/../..' . '/plugin_files/Services/Elementor/Factories/ElementorWidgetsFactory.class.php',
        'LiveChat\\Services\\Factories\\ApiClientFactory' => __DIR__ . '/../..' . '/plugin_files/Services/Factories/ApiClientFactory.class.php',
        'LiveChat\\Services\\Factories\\ConnectTokenFactory' => __DIR__ . '/../..' . '/plugin_files/Services/Factories/ConnectTokenFactory.class.php',
        'LiveChat\\Services\\Factories\\ConnectTokenProviderFactory' => __DIR__ . '/../..' . '/plugin_files/Services/Factories/ConnectTokenProviderFactory.class.php',
        'LiveChat\\Services\\Factories\\UrlProviderFactory' => __DIR__ . '/../..' . '/plugin_files/Services/Factories/UrlProviderFactory.class.php',
        'LiveChat\\Services\\LicenseProvider' => __DIR__ . '/../..' . '/plugin_files/Services/LicenseProvider.class.php',
        'LiveChat\\Services\\LicenseProviderTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/LicenseProviderTest.class.php',
        'LiveChat\\Services\\MenuProvider' => __DIR__ . '/../..' . '/plugin_files/Services/MenuProvider.class.php',
        'LiveChat\\Services\\MenuProviderTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/MenuProviderTest.class.php',
        'LiveChat\\Services\\MockData' => __DIR__ . '/../..' . '/plugin_files/tests/services/UserTest.class.php',
        'LiveChat\\Services\\ModuleConfiguration' => __DIR__ . '/../..' . '/plugin_files/Services/ModuleConfiguration.class.php',
        'LiveChat\\Services\\NoticeTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/notifications/NoticeTest.class.php',
        'LiveChat\\Services\\NotificationTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/notifications/NotificationTest.class.php',
        'LiveChat\\Services\\NotificationsRenderer' => __DIR__ . '/../..' . '/plugin_files/Services/NotificationsRenderer.class.php',
        'LiveChat\\Services\\NotificationsRendererTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/NotificationsRendererTest.class.php',
        'LiveChat\\Services\\Notifications\\ConfirmIdentityNotice' => __DIR__ . '/../..' . '/plugin_files/Services/Notifications/ConfirmIdentityNotice.class.php',
        'LiveChat\\Services\\Notifications\\ConnectNotice' => __DIR__ . '/../..' . '/plugin_files/Services/Notifications/ConnectNotice.class.php',
        'LiveChat\\Services\\Notifications\\DeactivationModal' => __DIR__ . '/../..' . '/plugin_files/Services/Notifications/DeactivationModal.class.php',
        'LiveChat\\Services\\Notifications\\Notice' => __DIR__ . '/../..' . '/plugin_files/Services/Notifications/Notice.class.php',
        'LiveChat\\Services\\Notifications\\Notification' => __DIR__ . '/../..' . '/plugin_files/Services/Notifications/Notification.class.php',
        'LiveChat\\Services\\Options\\AuthorizedUsers' => __DIR__ . '/../..' . '/plugin_files/Services/Options/AuthorizedUsers.class.php',
        'LiveChat\\Services\\Options\\AuthorizedUsersTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/options/AuthorizedUsersTest.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\DeprecatedLicenseEmail' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/DeprecatedLicenseEmail.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\DeprecatedLicenseNumber' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/DeprecatedLicenseNumber.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\DeprecatedOption' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/DeprecatedOption.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\DeprecatedOptionTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/options/deprecated/DeprecatedOptionTest.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\DeprecatedOptions' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/DeprecatedOptions.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\DeprecatedOptionsTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/options/deprecated/DeprecatedOptionsTest.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\DeprecatedReviewNoticeDismissed' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/DeprecatedReviewNoticeDismissed.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\DeprecatedReviewNoticeOffset' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/DeprecatedReviewNoticeOffset.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\DeprecatedReviewNoticeOptions' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/DeprecatedReviewNoticeOptions.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\DeprecatedReviewNoticeTimestamp' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/DeprecatedReviewNoticeTimestamp.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\Widget\\DeprecatedWidgetSettings' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/Widget/DeprecatedWidgetSettings.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\Widget\\DeprecatedWidgetSettingsTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/options/deprecated/widget/DeprecatedWidgetSettingsTest.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\Widget\\DeprecatedWidgetWooCommerceSettings' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/Widget/DeprecatedWidgetWooCommerceSettings.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\Widget\\DeprecatedWidgetWooCommerceSettingsTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/options/deprecated/widget/DeprecatedWidgetWooCommerceSettingsTest.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\Widget\\DeprecatedWidgetWordPressDisableGuestsOption' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/Widget/DeprecatedWidgetWordPressDisableGuestsOption.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\Widget\\DeprecatedWidgetWordPressDisableMobileOption' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/Widget/DeprecatedWidgetWordPressDisableMobileOption.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\Widget\\DeprecatedWidgetWordPressSettings' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Deprecated/Widget/DeprecatedWidgetWordPressSettings.class.php',
        'LiveChat\\Services\\Options\\Deprecated\\Widget\\DeprecatedWidgetWordPressSettingsTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/options/deprecated/widget/DeprecatedWidgetWordPressSettingsTest.class.php',
        'LiveChat\\Services\\Options\\Elementor\\ContactButtonWidgetURL' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Elementor/ContactButtonWidgetURL.class.php',
        'LiveChat\\Services\\Options\\Elementor\\ElementorWidgetsOptions' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Elementor/ElementorWidgetsOptions.class.php',
        'LiveChat\\Services\\Options\\Elementor\\QualityBadgeWidgetURL' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Elementor/QualityBadgeWidgetURL.class.php',
        'LiveChat\\Services\\Options\\Option' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Option.class.php',
        'LiveChat\\Services\\Options\\OptionTestCase' => __DIR__ . '/../..' . '/plugin_files/tests/services/options/OptionTestCase.php',
        'LiveChat\\Services\\Options\\OptionsSet' => __DIR__ . '/../..' . '/plugin_files/Services/Options/OptionsSet.class.php',
        'LiveChat\\Services\\Options\\OptionsSetTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/options/OptionsSetTest.class.php',
        'LiveChat\\Services\\Options\\Platform' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Platform.class.php',
        'LiveChat\\Services\\Options\\PublicKey' => __DIR__ . '/../..' . '/plugin_files/Services/Options/PublicKey.class.php',
        'LiveChat\\Services\\Options\\ReadableOption' => __DIR__ . '/../..' . '/plugin_files/Services/Options/ReadableOption.class.php',
        'LiveChat\\Services\\Options\\ReadableOptionTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/options/ReadableOptionTest.class.php',
        'LiveChat\\Services\\Options\\ReviewNoticeDismissed' => __DIR__ . '/../..' . '/plugin_files/Services/Options/ReviewNoticeDismissed.class.php',
        'LiveChat\\Services\\Options\\ReviewNoticeOffset' => __DIR__ . '/../..' . '/plugin_files/Services/Options/ReviewNoticeOffset.class.php',
        'LiveChat\\Services\\Options\\ReviewNoticeOptions' => __DIR__ . '/../..' . '/plugin_files/Services/Options/ReviewNoticeOptions.class.php',
        'LiveChat\\Services\\Options\\ReviewNoticeOptionsTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/options/ReviewNoticeOptionsTest.class.php',
        'LiveChat\\Services\\Options\\ReviewNoticeTimestamp' => __DIR__ . '/../..' . '/plugin_files/Services/Options/ReviewNoticeTimestamp.class.php',
        'LiveChat\\Services\\Options\\SettingsOptions' => __DIR__ . '/../..' . '/plugin_files/Services/Options/SettingsOptions.class.php',
        'LiveChat\\Services\\Options\\StoreToken' => __DIR__ . '/../..' . '/plugin_files/Services/Options/StoreToken.class.php',
        'LiveChat\\Services\\Options\\Synchronized' => __DIR__ . '/../..' . '/plugin_files/Services/Options/Synchronized.class.php',
        'LiveChat\\Services\\Options\\UserAuthOptions' => __DIR__ . '/../..' . '/plugin_files/Services/Options/UserAuthOptions.class.php',
        'LiveChat\\Services\\Options\\UserOption' => __DIR__ . '/../..' . '/plugin_files/Services/Options/UserOption.class.php',
        'LiveChat\\Services\\Options\\UserOptionTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/options/UserOptionTest.class.php',
        'LiveChat\\Services\\Options\\UserToken' => __DIR__ . '/../..' . '/plugin_files/Services/Options/UserToken.class.php',
        'LiveChat\\Services\\Options\\WidgetURL' => __DIR__ . '/../..' . '/plugin_files/Services/Options/WidgetURL.class.php',
        'LiveChat\\Services\\Options\\WooCommerce\\WooCommerceOption' => __DIR__ . '/../..' . '/plugin_files/Services/Options/WooCommerce/WooCommerceOption.class.php',
        'LiveChat\\Services\\Options\\WooCommerce\\WooCommerceOptionTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/options/woocommerce/WooCommerceOptionTest.class.php',
        'LiveChat\\Services\\Options\\WooCommerce\\WooCommerceUserOption' => __DIR__ . '/../..' . '/plugin_files/Services/Options/WooCommerce/WooCommerceUserOption.class.php',
        'LiveChat\\Services\\Options\\WooCommerce\\WooCommerceUserOptionTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/options/woocommerce/WooCommerceUserOptionTest.class.php',
        'LiveChat\\Services\\Options\\WritableOption' => __DIR__ . '/../..' . '/plugin_files/Services/Options/WritableOption.class.php',
        'LiveChat\\Services\\Options\\WritableOptionTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/options/WritableOptionTest.class.php',
        'LiveChat\\Services\\PlatformProvider' => __DIR__ . '/../..' . '/plugin_files/Services/PlatformProvider.class.php',
        'LiveChat\\Services\\PlatformProviderTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/PlatformProviderTest.class.php',
        'LiveChat\\Services\\SettingsProvider' => __DIR__ . '/../..' . '/plugin_files/Services/SettingsProvider.class.php',
        'LiveChat\\Services\\SettingsProviderTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/SettingsProviderTest.class.php',
        'LiveChat\\Services\\SetupProvider' => __DIR__ . '/../..' . '/plugin_files/Services/SetupProvider.class.php',
        'LiveChat\\Services\\SetupProviderTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/SetupProviderTest.class.php',
        'LiveChat\\Services\\Store' => __DIR__ . '/../..' . '/plugin_files/Services/Store.class.php',
        'LiveChat\\Services\\StoreTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/StoreTest.class.php',
        'LiveChat\\Services\\TemplateParser' => __DIR__ . '/../..' . '/plugin_files/Services/TemplateParser.class.php',
        'LiveChat\\Services\\TemplateParserTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/TemplateParserTest.class.php',
        'LiveChat\\Services\\Templates\\ChatWidgetScriptTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/ChatWidgetScriptTemplate.class.php',
        'LiveChat\\Services\\Templates\\ChatWidgetScriptTemplateTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/templates/ChatWidgetScriptTemplateTest.class.php',
        'LiveChat\\Services\\Templates\\ConfirmIdentityNoticeTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/ConfirmIdentityNoticeTemplate.class.php',
        'LiveChat\\Services\\Templates\\ConnectNoticeTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/ConnectNoticeTemplate.class.php',
        'LiveChat\\Services\\Templates\\CustomerTrackingTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/CustomerTrackingTemplate.class.php',
        'LiveChat\\Services\\Templates\\CustomerTrackingTemplateTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/templates/CustomerTrackingTemplateTest.class.php',
        'LiveChat\\Services\\Templates\\DeactivationModalTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/DeactivationModalTemplate.class.php',
        'LiveChat\\Services\\Templates\\NoticeTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/NoticeTemplate.class.php',
        'LiveChat\\Services\\Templates\\NoticeTemplateTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/templates/NoticeTemplateTest.class.php',
        'LiveChat\\Services\\Templates\\ResourcesTabTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/ResourcesTabTemplate.class.php',
        'LiveChat\\Services\\Templates\\SettingsTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/SettingsTemplate.class.php',
        'LiveChat\\Services\\Templates\\SettingsTemplateTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/templates/SettingsTemplateTest.class.php',
        'LiveChat\\Services\\Templates\\Template' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/Template.class.php',
        'LiveChat\\Services\\Templates\\TrackingCodeTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/TrackingCodeTemplate.class.php',
        'LiveChat\\Services\\Templates\\TrackingCodeTemplateTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/templates/TrackingCodeTemplateTest.class.php',
        'LiveChat\\Services\\Templates\\Widgets\\ContactButtonWidgetTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/Widgets/ContactButtonWidgetTemplate.class.php',
        'LiveChat\\Services\\Templates\\Widgets\\ContactButtonWidgetTemplateTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/templates/widgets/ContactButtonWidgetTemplateTest.class.php',
        'LiveChat\\Services\\Templates\\Widgets\\Previews\\ContactButtonPreviewWidgetTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/Widgets/Previews/ContactButtonPreviewWidgetTemplate.class.php',
        'LiveChat\\Services\\Templates\\Widgets\\Previews\\ContactButtonPreviewWidgetTemplateTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/templates/widgets/previews/ContactButtonPreviewWidgetTemplateTest.class.php',
        'LiveChat\\Services\\Templates\\Widgets\\QualityBadgeWidgetTemplate' => __DIR__ . '/../..' . '/plugin_files/Services/Templates/Widgets/QualityBadgeWidgetTemplate.class.php',
        'LiveChat\\Services\\Templates\\Widgets\\QualityBadgeWidgetTemplateTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/templates/widgets/QualityBadgeWidgetTemplateTest.class.php',
        'LiveChat\\Services\\TokenValidator' => __DIR__ . '/../..' . '/plugin_files/Services/TokenValidator.class.php',
        'LiveChat\\Services\\TokenValidatorTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/TokenValidatorTest.class.php',
        'LiveChat\\Services\\UrlProvider' => __DIR__ . '/../..' . '/plugin_files/Services/UrlProvider.class.php',
        'LiveChat\\Services\\UrlProviderTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/UrlProviderTest.class.php',
        'LiveChat\\Services\\User' => __DIR__ . '/../..' . '/plugin_files/Services/User.class.php',
        'LiveChat\\Services\\UserTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/UserTest.class.php',
        'LiveChat\\Services\\WP_Error' => __DIR__ . '/../..' . '/plugin_files/tests/services/ApiClientTest.class.php',
        'LiveChat\\Services\\WidgetProvider' => __DIR__ . '/../..' . '/plugin_files/Services/WidgetProvider.class.php',
        'LiveChat\\Services\\WidgetProviderTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/WidgetProviderTest.class.php',
        'LiveChat\\Services\\WooCommerce\\CustomerTrackingProvider' => __DIR__ . '/../..' . '/plugin_files/Services/WooCommerce/CustomerTrackingProvider.class.php',
        'LiveChat\\Services\\WooCommerce\\CustomerTrackingProviderTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/woocommerce/CustomerTrackingProviderTest.class.php',
        'LiveChat\\WidgetTestCase' => __DIR__ . '/../..' . '/plugin_files/tests/WidgetTestCase.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit01de33511194b7f2dcf04c43a4520c42::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit01de33511194b7f2dcf04c43a4520c42::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit01de33511194b7f2dcf04c43a4520c42::$classMap;

        }, null, ClassLoader::class);
    }
}
