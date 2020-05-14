<?php
/**
 * Plugin PDF Template: Creates pdf-Creation-Link with specified template
 * Requires dw2pdf-Plugin
 * 
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Gero Gothe <gero.gothe@gmail.com>
 *
 * Changes Version 1.0.1 / 03.06.2019
 * - Added "&toc=0" to link
 * - Added ucfirst to template description
 */
 
// must be run within DokuWiki
if(!defined('DOKU_INC')) die();
 
if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
require_once(DOKU_PLUGIN.'syntax.php');
 
/**
 * All DokuWiki plugins to extend the parser/rendering mechanism
 * need to inherit from this class
 */
class syntax_plugin_dw2pdf_maillink extends DokuWiki_Syntax_Plugin {
 
    function getType(){ return 'formatting'; }
    function getAllowedTypes() { return array('formatting', 'substition', 'disabled'); }   
    function getSort(){ return 158; }
    function connectTo($mode) { $this->Lexer->addEntryPattern('<pdfmail (?=.*?>)',$mode,'plugin_dw2pdf_maillink'); }
    function postConnect() { $this->Lexer->addExitPattern('>','plugin_dw2pdf_maillink'); }
 
	private $dw2pdf_inst = false;
	
	

	
    /**
     * Handle the match
     */
    function handle($match, $state, $pos, Doku_Handler $handler){
        switch ($state) {
          case DOKU_LEXER_ENTER :      return array($state, $match); 
          case DOKU_LEXER_UNMATCHED :  return array($state, $match);
          case DOKU_LEXER_EXIT :       return array($state, '');
        }
        return array();
    }
 
    /**
     * Create output
     */
    function render($mode, Doku_Renderer $renderer, $data) {
		global $ID;
		
		list($state, $match) = $data;
					
        if($mode == 'xhtml'){
			
	
            switch ($state) {
              case DOKU_LEXER_ENTER :      
                $renderer->doc .= "<a class='noprint' target='_blank' href='doku.php?id=$ID&do=export_pdf&toc=0&tpl=kompakt&pdfmail="; 
                break;

              case DOKU_LEXER_UNMATCHED : $c = explode(" ",$match); 
										  $renderer->doc .= ($c[0])."'>PDF per Mail an: <b>".($c[1])."</b>";
										  break;
										  
              case DOKU_LEXER_EXIT :      $renderer->doc .= "</a>"; break;
            }
            return true;
        }
        
  

        return false;
    }
 
   
}
?>
