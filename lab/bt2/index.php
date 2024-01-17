<?php
require_once ( 'ManagerInterface.php' );
require_once ( 'EngineerInterface.php' );
require_once ( 'SalespresonInterface.php' );
require_once ( 'EmployeeAbstract.php' );
require_once ( 'Manager.php' );
require_once ( 'Engineer.php' );
require_once ( 'Salespreson.php' );
echo '<pre>';
$manager = new Manager( 'Manager', '1', '400', '5' );

print_r( 'Chức Vụ: '. $manager->getName().'ID Quản Lý: '.$manager->getId().'Lương cơ bản: '.$manager->getLuongcoban().'Số Nhân Viên Quản Lý: '. $manager->manageAble().PHP_EOL );

$engineer = new Engineer( 'Engineer', '2', '600', '10' );

print_r( 'Chức Vụ: '. $engineer->getName().'ID Quản Lý: '.$engineer->getId().'Lương cơ bản: '.$engineer->getLuongcoban().'Số Thành Tựu: '. $engineer->inventTotal().PHP_EOL );

$salesPreson = new Salespreson( 'Salespreson', '3', '200', '100' );

print_r( 'Chức Vụ: '. $salesPreson->getName().'ID Quản Lý: '.$salesPreson->getId().'Lương cơ bản: '.$salesPreson->getLuongcoban().'Số Sản Phẩm Bán Ra: '. $salesPreson->productTotal().PHP_EOL );
