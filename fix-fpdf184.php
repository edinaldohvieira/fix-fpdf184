<?php
/**
 * Plugin Name:     Fix FPDF184
 * Plugin URI:      https://github.com/edinaldohvieira/fix-fpdf184
 * Description:     Instala e ativa recursos de impressão PDF
 * Author:          edinaldohvieira
 * Author URI:      https://github.com/edinaldohvieira/fix-fpdf184
 * Text Domain:     fix-fpdf184
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Fix_Fpdf184
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'FIX_FPDF184', plugin_dir_path( __FILE__ )."/fpdf184/fpdf.php" );
