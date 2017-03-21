<?php
namespace umbalaconmeogia\japanzipcode;

class ZipcodeInfo
{
    /**
     * The zipcode (7 digits).
     * @var string
     */
    public $zipCode;

    /**
     * 都道府県名
     * @var string
     */
    public $prefectureKanji;

    /**
     * 都道府県名
     * @var string
     */
    public $prefectureKanaKanji;

    /**
     * 市区町村名
     * @var string
     */
    public $cityWardTownVillageKanji;

    /**
     * 市区町村名
     * @var string
     */
    public $cityWardTownVillageKana;

    /**
     * 町域名
     * @var string
     */
    public $townArea;

    /**
     * 町域名
     * @var string
     */
    public $townAreaKana;
}