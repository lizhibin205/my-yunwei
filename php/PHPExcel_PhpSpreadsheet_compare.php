<?php
$data = '{"id":"73982","sequence":"1","warehouse":"VIP_NH","tsift":"1","time_tag":"2018122510","type":"2","floor":"0","layout":"0","is_fixed":"0","bind_id":"12233","group_id":"0","name":"\u697c\u5c42\u7ec4\u4ef6\u4f18\u5316","vbrand_sequence":"0"}';
$data = json_decode($data, true);

$header = array_keys($data);
$list = [];
$list = array_pad($list, 10000, $data);

//PHPExcel
//$startMemory = memory_get_usage();
//$startTime = microtime(true);
//require __DIR__ . "/PHPExcel/Classes/PHPExcel.php";
//$phpExcel = new PHPExcel();
//$phpExcel->getProperties()->setCreator("test");
//
//$line = 1;
//foreach ($list as $row) {
//    $column = 0;
//    foreach ($row as $val) {
//        $phpExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow($column, $line, $val);
//        $column += 1;
//    }
//    $line += 1;
//}
//$phpExcel->setActiveSheetIndex(0)->fromArray($list, null);
//
//$phpExcel->getActiveSheet()->setTitle("test");
//$excelWriter = PHPExcel_IOFactory::createWriter($phpExcel, 'Excel2007');
//$excelWriter->save("phpExcel.xlsx");
//echo "Cost time: ", (microtime(true) - $startTime), PHP_EOL;
//echo "Use momory: ", (memory_get_usage() - $startMemory),PHP_EOL;

//PhpSpreadsheet
//$startMemory = memory_get_usage();
//$startTime = microtime(true);
//require __DIR__ . "/vendor/autoload.php";

//$spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();
//$sheet = $spreadsheet->getActiveSheet();

//$line = 1;
//foreach ($list as $row) {
//    $column = 0;
//    foreach ($row as $val) {
//        $sheet->setCellValueByColumnAndRow($column, $line, $val);
//        $column += 1;
//    }
//    $line += 1;
//}
//$sheet->fromArray($list, null);

//$writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
//$writer->save('PhpSpreadsheet.xlsx');
//echo "Cost time: ", (microtime(true) - $startTime), PHP_EOL;
//echo "Use momory: ", (memory_get_usage() - $startMemory),PHP_EOL;
