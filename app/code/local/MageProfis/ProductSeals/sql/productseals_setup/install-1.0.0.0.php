<?php
/* @var MageProfis_ChildrenCategories_Model_Resource_Setup $installer */
$installer = $this;
$installer->startSetup();
//$installer->removeAttribute('catalog_product', 'organic_seal');
$installer->addAttribute('catalog_product', 'organic_seal', array(
    'group'                         => 'Siegel',
    'label'                         => '"Bio" Siegel anzeigen',
    'input'                         => 'select',
    'type'                          => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => true,
    'comparable'                    => false,
    'visible_on_front'              => false,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
    'default'                       => "1",
    'option'                        => array (
                                        'values' => array(
                                            0 => 'Ja',
                                            1 => 'Nein',
                                        )
                                    ),
));

//$installer->removeAttribute('catalog_product', 'gmo_free_seal');
$installer->addAttribute('catalog_product', 'gmo_free_seal', array(
    'group'                         => 'Siegel',
    'label'                         => '"Gentechnikfrei" Siegel anzeigen',
    'input'                         => 'select',
    'type'                          => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => true,
    'comparable'                    => false,
    'visible_on_front'              => false,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
    'default'                       => "1",
    'option'                        => array (
                                        'values' => array(
                                            0 => 'Ja',
                                            1 => 'Nein',
                                        )
                                    ),
));

//$installer->removeAttribute('catalog_product', 'fairtrade_seal');
$installer->addAttribute('catalog_product', 'fairtrade_seal', array(
    'group'                         => 'Siegel',
    'label'                         => '"Fairtrade" Siegel anzeigen',
    'input'                         => 'select',
    'type'                          => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => true,
    'comparable'                    => false,
    'visible_on_front'              => false,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
    'default'                       => "1",
    'option'                        => array (
                                        'values' => array(
                                            0 => 'Ja',
                                            1 => 'Nein',
                                        )
                                    ),
));

//$installer->removeAttribute('catalog_product', 'lactose_seal');
$installer->addAttribute('catalog_product', 'lactose_seal', array(
    'group'                         => 'Siegel',
    'label'                         => '"Laktosefrei" Siegel anzeigen',
    'input'                         => 'select',
    'type'                          => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => true,
    'comparable'                    => false,
    'visible_on_front'              => false,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
    'default'                       => "1",
    'option'                        => array (
                                        'values' => array(
                                            0 => 'Ja',
                                            1 => 'Nein',
                                        )
                                    ),
));

//$installer->removeAttribute('catalog_product', 'soyfree_seal');
$installer->addAttribute('catalog_product', 'soyfree_seal', array(
    'group'                         => 'Siegel',
    'label'                         => '"Sojafrei" Siegel anzeigen',
    'input'                         => 'select',
    'type'                          => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => true,
    'comparable'                    => false,
    'visible_on_front'              => false,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
    'default'                       => "1",
    'option'                        => array (
                                        'values' => array(
                                            0 => 'Ja',
                                            1 => 'Nein',
                                        )
                                    ),
));

//$installer->removeAttribute('catalog_product', 'sugarfree_seal');
$installer->addAttribute('catalog_product', 'sugarfree_seal', array(
    'group'                         => 'Siegel',
    'label'                         => '"Zuckerfrei" Siegel anzeigen',
    'input'                         => 'select',
    'type'                          => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => true,
    'comparable'                    => false,
    'visible_on_front'              => false,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
    'default'                       => "1",
    'option'                        => array (
                                        'values' => array(
                                            0 => 'Ja',
                                            1 => 'Nein',
                                        )
                                    ),
));

//$installer->removeAttribute('catalog_product', 'gluten_seal');
$installer->addAttribute('catalog_product', 'gluten_seal', array(
    'group'                         => 'Siegel',
    'label'                         => '"Glutenfrei" Siegel anzeigen',
    'input'                         => 'select',
    'type'                          => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => true,
    'comparable'                    => false,
    'visible_on_front'              => false,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
    'default'                       => "1",
    'option'                        => array (
                                        'values' => array(
                                            0 => 'Ja',
                                            1 => 'Nein',
                                        )
                                    ),
));

//$installer->removeAttribute('catalog_product', 'dark_chocolate_seal');
$installer->addAttribute('catalog_product', 'dark_chocolate_seal', array(
    'group'                         => 'Siegel',
    'label'                         => '"Dunkle Schokolade" Siegel anzeigen',
    'input'                         => 'select',
    'type'                          => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => true,
    'comparable'                    => false,
    'visible_on_front'              => false,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
    'default'                       => "1",
    'option'                        => array (
                                        'values' => array(
                                            0 => 'Ja',
                                            1 => 'Nein',
                                        )
                                    ),
));

//$installer->removeAttribute('catalog_product', 'white_chocolate_seal');
$installer->addAttribute('catalog_product', 'white_chocolate_seal', array(
    'group'                         => 'Siegel',
    'label'                         => '"weiße Schokolade" Siegel anzeigen',
    'input'                         => 'select',
    'type'                          => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => true,
    'comparable'                    => false,
    'visible_on_front'              => false,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
    'default'                       => "1",
    'option'                        => array (
                                        'values' => array(
                                            0 => 'Ja',
                                            1 => 'Nein',
                                        )
                                    ),
));

//$installer->removeAttribute('catalog_product', 'chocolate_seal');
$installer->addAttribute('catalog_product', 'chocolate_seal', array(
    'group'                         => 'Siegel',
    'label'                         => '"Vollmilchschokolade" Siegel anzeigen',
    'input'                         => 'select',
    'type'                          => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => true,
    'comparable'                    => false,
    'visible_on_front'              => false,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
    'default'                       => "1",
    'option'                        => array (
                                        'values' => array(
                                            0 => 'Ja',
                                            1 => 'Nein',
                                        )
                                    ),
));
$installer->endSetup();