<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite78a74f5f67ec3c3084ab32b8ee35f89
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MeestShipping\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MeestShipping\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'MeestShipping\\Contracts\\Module' => __DIR__ . '/../..' . '/src/Contracts/Module.php',
        'MeestShipping\\Controllers\\DefaultController' => __DIR__ . '/../..' . '/src/Controllers/DefaultController.php',
        'MeestShipping\\Controllers\\ParcelController' => __DIR__ . '/../..' . '/src/Controllers/ParcelController.php',
        'MeestShipping\\Controllers\\PickupController' => __DIR__ . '/../..' . '/src/Controllers/PickupController.php',
        'MeestShipping\\Controllers\\SettingController' => __DIR__ . '/../..' . '/src/Controllers/SettingController.php',
        'MeestShipping\\Core\\Controller' => __DIR__ . '/../..' . '/src/Core/Controller.php',
        'MeestShipping\\Core\\Customer' => __DIR__ . '/../..' . '/src/Core/Customer.php',
        'MeestShipping\\Core\\Http' => __DIR__ . '/../..' . '/src/Core/Http.php',
        'MeestShipping\\Core\\MeestShippingMethod' => __DIR__ . '/../..' . '/src/Core/MeestShippingMethod.php',
        'MeestShipping\\Core\\Model' => __DIR__ . '/../..' . '/src/Core/Model.php',
        'MeestShipping\\Core\\Resource' => __DIR__ . '/../..' . '/src/Core/Resource.php',
        'MeestShipping\\Core\\Table' => __DIR__ . '/../..' . '/src/Core/Table.php',
        'MeestShipping\\Core\\View' => __DIR__ . '/../..' . '/src/Core/View.php',
        'MeestShipping\\Exceptions\\BadRequestException' => __DIR__ . '/../..' . '/src/Exceptions/BadRequestException.php',
        'MeestShipping\\Exceptions\\UnauthorizedRequestException' => __DIR__ . '/../..' . '/src/Exceptions/UnauthorizedRequestException.php',
        'MeestShipping\\Helpers\\Html' => __DIR__ . '/../..' . '/src/Helpers/Html.php',
        'MeestShipping\\Models\\Parcel' => __DIR__ . '/../..' . '/src/Models/Parcel.php',
        'MeestShipping\\Models\\Pickup' => __DIR__ . '/../..' . '/src/Models/Pickup.php',
        'MeestShipping\\Models\\PickupParcel' => __DIR__ . '/../..' . '/src/Models/PickupParcel.php',
        'MeestShipping\\Models\\User' => __DIR__ . '/../..' . '/src/Models/User.php',
        'MeestShipping\\Modules\\Activator' => __DIR__ . '/../..' . '/src/Modules/Activator.php',
        'MeestShipping\\Modules\\Admin' => __DIR__ . '/../..' . '/src/Modules/Admin.php',
        'MeestShipping\\Modules\\AdminAjax' => __DIR__ . '/../..' . '/src/Modules/AdminAjax.php',
        'MeestShipping\\Modules\\Api' => __DIR__ . '/../..' . '/src/Modules/Api.php',
        'MeestShipping\\Modules\\Asset' => __DIR__ . '/../..' . '/src/Modules/Asset.php',
        'MeestShipping\\Modules\\Checkout' => __DIR__ . '/../..' . '/src/Modules/Checkout.php',
        'MeestShipping\\Modules\\Config' => __DIR__ . '/../..' . '/src/Modules/Config.php',
        'MeestShipping\\Modules\\Option' => __DIR__ . '/../..' . '/src/Modules/Option.php',
        'MeestShipping\\Modules\\OrderUpdate' => __DIR__ . '/../..' . '/src/Modules/OrderUpdate.php',
        'MeestShipping\\Modules\\PluginMenu' => __DIR__ . '/../..' . '/src/Modules/PluginMenu.php',
        'MeestShipping\\Modules\\PublicApi' => __DIR__ . '/../..' . '/src/Modules/PublicApi.php',
        'MeestShipping\\Modules\\RestApi' => __DIR__ . '/../..' . '/src/Modules/RestApi.php',
        'MeestShipping\\Modules\\ShippingCost' => __DIR__ . '/../..' . '/src/Modules/ShippingCost.php',
        'MeestShipping\\Modules\\ShippingMethod' => __DIR__ . '/../..' . '/src/Modules/ShippingMethod.php',
        'MeestShipping\\Modules\\Translate' => __DIR__ . '/../..' . '/src/Modules/Translate.php',
        'MeestShipping\\Modules\\Web' => __DIR__ . '/../..' . '/src/Modules/Web.php',
        'MeestShipping\\Repositories\\BranchRepository' => __DIR__ . '/../..' . '/src/Repositories/BranchRepository.php',
        'MeestShipping\\Repositories\\CityRepository' => __DIR__ . '/../..' . '/src/Repositories/CityRepository.php',
        'MeestShipping\\Repositories\\CountryRepository' => __DIR__ . '/../..' . '/src/Repositories/CountryRepository.php',
        'MeestShipping\\Repositories\\PackTypesRepository' => __DIR__ . '/../..' . '/src/Repositories/PackTypesRepository.php',
        'MeestShipping\\Repositories\\Repository' => __DIR__ . '/../..' . '/src/Repositories/Repository.php',
        'MeestShipping\\Repositories\\StreetRepository' => __DIR__ . '/../..' . '/src/Repositories/StreetRepository.php',
        'MeestShipping\\Resources\\CostApiResource' => __DIR__ . '/../..' . '/src/Resources/CostApiResource.php',
        'MeestShipping\\Resources\\ParcelApiResource' => __DIR__ . '/../..' . '/src/Resources/ParcelApiResource.php',
        'MeestShipping\\Resources\\ParcelResource' => __DIR__ . '/../..' . '/src/Resources/ParcelResource.php',
        'MeestShipping\\Resources\\PickupApiResource' => __DIR__ . '/../..' . '/src/Resources/PickupApiResource.php',
        'MeestShipping\\Resources\\PickupResource' => __DIR__ . '/../..' . '/src/Resources/PickupResource.php',
        'MeestShipping\\Tables\\ParcelTable' => __DIR__ . '/../..' . '/src/Tables/ParcelTable.php',
        'MeestShipping\\Tables\\PickupTable' => __DIR__ . '/../..' . '/src/Tables/PickupTable.php',
        'MeestShipping\\Traits\\Helper' => __DIR__ . '/../..' . '/src/Traits/Helper.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite78a74f5f67ec3c3084ab32b8ee35f89::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite78a74f5f67ec3c3084ab32b8ee35f89::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite78a74f5f67ec3c3084ab32b8ee35f89::$classMap;

        }, null, ClassLoader::class);
    }
}