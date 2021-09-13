<?php
    session_start();
    date_default_timezone_set("America/Bogota");
    const BASE_URL = "http://192.168.0.15/SMN947-PM";
    //Database
    const DB_HOST = "localhost";
    const DB_NAME = "smn947-pm";
    const DB_USER = "root";
    const DB_PASSWORD = "12345";
    const DB_CHARSET = "charset=utf-8";
    //Site Identity
    const SITE_TITLE = "SMN947-PM";
    const SITE_DESC = "A project Management App";

    //
    const STYLES = BASE_URL.'/Assets/css';
    const SCRIPTS = BASE_URL.'/Assets/js';
    const IMAGES = BASE_URL.'/Assets/images';
    const FONTS = BASE_URL.'/Assets/fonts';

