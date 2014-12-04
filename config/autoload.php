<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Catalog
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'catalog',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Models
	'catalog\CatalogTypeModel'     => 'system/modules/catalog/models/CatalogTypeModel.php',
	'catalog\CatalogProductModel'  => 'system/modules/catalog/models/CatalogProductModel.php',
	'catalog\CatalogCategoryModel' => 'system/modules/catalog/models/CatalogCategoryModel.php',

	// Modules
	'catalog\ModuleCatalogList'    => 'system/modules/catalog/modules/ModuleCatalogList.php',
	'catalog\ModuleCatalogRelated' => 'system/modules/catalog/modules/ModuleCatalogRelated.php',
	'catalog\ModuleCatalogDetail'  => 'system/modules/catalog/modules/ModuleCatalogDetail.php',
	'catalog\ModuleCatalog'        => 'system/modules/catalog/modules/ModuleCatalog.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_catalog_related' => 'system/modules/catalog/templates/modules',
	'mod_catalog_list'    => 'system/modules/catalog/templates/modules',
	'mod_catalog_detail'  => 'system/modules/catalog/templates/modules',
	'product_full'        => 'system/modules/catalog/templates/product',
	'product_short'       => 'system/modules/catalog/templates/product',
	'product_list'        => 'system/modules/catalog/templates/product',
));
