<?php

  class WPGTools {

    public static function getValue($key, $default = '') {
      if(isset($_POST[$key])) {
        return $_POST[$key];
      } elseif (isset($_GET[$key])) {
        return $_GET[$key];
      } else {
        return $default;
      }
    }

    public static function isSubmit($key) {
      if (isset($_POST[$key]) or isset($_GET[$key])) {
        return true;
      }
      return false;
    }

    public static function redirect($url, $code = null) {
      if ($code) {
        header('Location: '.$url, true, $code);
        exit();
      }
      header('Location: '.$url);
      exit();
    }

    public static function addSuccess($text) {

    }

    public static function addError($text) {

    }

    public static function addLog($text) {

    }

    public static function esc($text) {
      return htmlentities($text, ENT_COMPAT, 'utf-8');
    }

    public function git_admin_notice__error($mess) {
          $class = 'notice notice-error';
          $message = __($mess);

          printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) );
    }
    //add_action( 'admin_notices', 'git_admin_notice__error' );

    public function git_admin_notice__success($mess) {
        $class = 'notice notice-success';
        $message = __($mess);

        printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) );
    }
    //add_action( 'admin_notices', 'git_admin_notice__success' );

  }
