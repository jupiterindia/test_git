 <?php
///    initialize magento environment for 'default' store
    /*require_once 'app/Mage.php';
    Mage::app('default');

    echo "initialising";
    echo runAdd();
    echo "finishing";

function runAdd()
{
    $setup = new Mage_Eav_Model_Entity_Setup('core_setup');
    // below code will add text attribute
    $setup->addAttribute('catalog_category', 'test_field', array(
        'group'         => 'General Information',
        'input'         => 'text',
        'type'          => 'varchar',
        'label'         => 'a new text field',
        'backend'       => '',
        'visible'       => 1,
        'required'      => 0,
        'user_defined'  => 1,
        'position'      => 10,
        'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    ));
} */
?>
<?php
/*require_once('app/Mage.php');
Mage::app()->setCurrentStore(Mage::getModel('core/store')->load(Mage_Core_Model_App::ADMIN_STORE_ID));
$helper=Mage::helper('mageworks_import/category');
$catid = $helper->getCategoryIdFromPath2('Root Catalog/Cables/Finolex', 'Cables Finolex');
echo '<pre>';
print_r($catid);*/
//phpinfo(); 
echo "TEST TEST Test";
?>
