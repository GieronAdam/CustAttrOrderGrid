# CustAttrOrderGrid
If You don't want in every module adding Grid block You can use simply this module. (for tests)
If you have a few modules where you install custom attributes to order, 
and You dont want in every module rewrite Mage_Adminhtml_Block_Sales_Order_Grid, 
You can simply add the attribute code and display name in admin panel.
like this: 
<quote>attribute_code_from_installer:Display Name,another_attr_code:Another Display Name</quote>

module will add attributes to grid after entity_id column.
Configuration:
<img src="http://foodthinktank.pl/images/file?name=Zrzut%20ekranu%202018-02-11%20o%2011.40.18.png" alt="configuration">
Effect:
<img src="http://foodthinktank.pl/images/file?name=Zrzut%20ekranu%202018-02-11%20o%2011.42.40.png" alt="effect">
