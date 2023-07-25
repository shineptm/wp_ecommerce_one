<?php
/*
Plugin Name: ACF Views
Plugin URI: https://wplake.org/acf-views/
Description: Display ACF fields and Posts using shortcodes.
Version: 1.9.5
Author: WPLake
Author URI: https://wplake.org/acf-views/
Text Domain: acf-views
*/

namespace org\wplake\acf_views;

use org\wplake\acf_views\AcfCard\{AcfCards, CardMarkup, QueryBuilder};
use org\wplake\acf_views\AcfGroups\{AcfCardData, AcfViewData, Item};
use org\wplake\acf_views\AcfPro\AcfPro;
use org\wplake\acf_views\AcfView\{AcfViews, ViewMarkup};
use org\wplake\acf_views\vendors\LightSource\AcfGroups\Creator;
use org\wplake\acf_views\vendors\LightSource\AcfGroups\Loader as GroupsLoader;

defined('ABSPATH') || exit;

// wrapper to avoid variable name conflicts
$acfViews = function () {
    // skip initialization if PRO already active
    if (class_exists(Plugin::class)) {
        return;
    }

    require_once __DIR__ . '/prefixed_vendors/vendor/scoper-autoload.php';

    $groupCreator = new Creator();
    $acfViewData = $groupCreator->create(AcfViewData::class);
    $acfCardData = $groupCreator->create(AcfCardData::class);
    $item = $groupCreator->create(Item::class);
    $options = new Options();
    $settings = new Settings($options);
    // load right here, as used everywhere
    $settings->load();

    $acf = new Acf();
    $html = new Html();
    $viewMarkup = new ViewMarkup($html);
    $queryBuilder = new QueryBuilder();
    $cardMarkup = new CardMarkup($queryBuilder);
    $cache = new Cache($acfViewData, $acfCardData);
    $plugin = new Plugin($acf, $viewMarkup, $cardMarkup, $queryBuilder, $options, $cache);
    $acfViews = new AcfViews($html, $viewMarkup, $plugin, $cache);
    $acfCards = new AcfCards($html, $plugin, $queryBuilder, $cardMarkup, $cache);
    $demoImport = new DemoImport($acfViews, $settings, $item, $acfCards, $cache);
    $dashboard = new Dashboard($plugin, $html, $acf, $options, $demoImport);
    $acfPro = new AcfPro($plugin);
    $upgrades = new Upgrades($plugin, $settings, $cache, $acfViews);
    $activeInstallations = new ActiveInstallations($plugin, $settings, $options);

    $acfGroupsLoader = new GroupsLoader();
    $acfGroupsLoader->signUpGroups('org\wplake\acf_views\AcfGroups', __DIR__ . '/src/AcfGroups');

    $plugin->setHooks();
    $acfViews->setHooks();
    $acf->setHooks();
    $dashboard->setHooks();
    $demoImport->setHooks();
    $acfCards->setHooks();
    $acfPro->setHooks();
    $upgrades->setHooks();
    $activeInstallations->setHooks();
};
$acfViews();
