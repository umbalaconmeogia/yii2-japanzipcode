<?php
namespace umbalaconmeogia\japanzipcode;

class JapanZipcodeCsv
{
    const COLUMN_INDEX_ZIPCODE = 2;

    public $csvFileName = 'KEN_ALL.utf8.csv';

    /**
     * Get path to csv file.
     * @return string
     */
    private function getCsvFilePath()
    {
        return __DIR__ . DIRECTORY_SEPARATOR . $this->csvFileName;
    }

    /**
     * @param string $zipCode
     * @return ZipcodeInfo
     */
    public function findByZipCode($zipCode)
    {
        $result = NULL;

        $f = fopen($this->getCsvFilePath(), 'r');

        while (($data = fgetcsv($f)) !== FALSE) {
            if ($data[self::COLUMN_INDEX_ZIPCODE] == $zipCode) {
                $result = createZipcodeInfo($data);
            }
        }

        fclose($f);

        return $result;
    }


}