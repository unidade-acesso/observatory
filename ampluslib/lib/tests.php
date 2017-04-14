<?php
$tests=array('a_01a'=>array('type'=>'true','elem'=>'a','test'=>'aSkipFirst','score'=>10,'level'=>'a','trust'=>'0.7','ref'=>'G1','scs'=>'2.4.1','dis'=>'43522'),'a_01b'=>array('type'=>'fals','elem'=>'a','test'=>'aSkipFirst','score'=>3,'level'=>'a','trust'=>'0.9','ref'=>'G1','scs'=>'2.4.1','dis'=>'43522'),'a_02a'=>array('type'=>'fals','elem'=>'a','test'=>'aSkip','score'=>3,'level'=>'a','trust'=>'0.9','ref'=>'G123','scs'=>'2.4.1','dis'=>'43522'),'a_02b'=>array('type'=>'true','elem'=>'a','test'=>'aSkip','score'=>10,'level'=>'a','trust'=>'0.7','ref'=>'G123','scs'=>'2.4.1','dis'=>'43522'),'a_03'=>array('type'=>'decr','elem'=>'a','test'=>'aImgAltNo','score'=>3,'level'=>'A','trust'=>'1','top'=>1,'steps'=>1,'ref'=>'F89','scs'=>'2.4.4,2.4.9,4.1.2','dis'=>'53322'),'a_04'=>array('type'=>'fals','elem'=>'all','test'=>'a','score'=>3,'level'=>'AA','trust'=>'1','ref'=>'G125','scs'=>'2.4.5','dis'=>'54353'),'a_05'=>array('type'=>'prop','elem'=>'a','test'=>'aTitleMatch','score'=>5,'level'=>'a','trust'=>'1','ref'=>'H33','scs'=>'2.4.4,2.4.9','dis'=>'52132'),'a_06'=>array('type'=>'decr','elem'=>'a','test'=>'aAdjacentSame','score'=>5,'level'=>'A','trust'=>'1','top'=>1,'steps'=>1,'ref'=>'H2','scs'=>'1.1.1,2.4.4,2.4.9','dis'=>'54353'),'a_09'=>array('type'=>'decr','elem'=>'a','test'=>'aSameText','score'=>3,'level'=>'AAA','trust'=>'1','top'=>1,'steps'=>1,'ref'=>'F84','scs'=>'2.4.9','dis'=>'52122'),'abbr_01'=>array('type'=>'true','elem'=>'all','test'=>'abbrNo','score'=>3,'level'=>'AAA','trust'=>'1','ref'=>'G102','scs'=>'3.1.4','dis'=>'42153'),'akey_01'=>array('type'=>'true','elem'=>'all','test'=>'acckeyRep','score'=>4,'level'=>'A','trust'=>'1','ref'=>'F17','scs'=>'1.3.1,4.1.1','dis'=>'44151'),'applet_01'=>array('type'=>'prop','elem'=>'applet','test'=>'appletAltNo','score'=>3,'level'=>'A','trust'=>'1','ref'=>'H35','scs'=>'1.1.1','dis'=>'53142'),'area_01a'=>array('type'=>'fals','elem'=>'area','test'=>'areaAltNo','score'=>10,'level'=>'a','trust'=>'0.9','ref'=>'H24','scs'=>'1.1.1,2.4.4,2.4.9','dis'=>'54222'),'area_01b'=>array('type'=>'prop','elem'=>'area','test'=>'areaAltNo','score'=>3,'level'=>'A','trust'=>'1','ref'=>'F65','scs'=>'1.1.1','dis'=>'53322'),'blink_01'=>array('type'=>'decr','elem'=>'all','test'=>'blink','score'=>2,'level'=>'A','trust'=>'1','top'=>1,'steps'=>1,'ref'=>'F47','scs'=>'2.2.2','dis'=>'15154'),'blink_02'=>array('type'=>'true','elem'=>'all','test'=>'cssBlink','score'=>3,'level'=>'A','trust'=>'0.9','ref'=>'F4','scs'=>'2.2.2','dis'=>'15152'),'br_01'=>array('type'=>'decr','elem'=>'all','test'=>'brSec','score'=>3,'level'=>'a','trust'=>'0.7','top'=>1,'steps'=>1,'ref'=>'H48','scs'=>'1.3.1','dis'=>'53342'),'color_01'=>array('type'=>'true','elem'=>'all','test'=>'colorFgBgNo','score'=>5,'level'=>'aa','trust'=>'0.9','ref'=>'F24','scs'=>'1.4.3,1.4.6,1.4.8','dis'=>'13113'),'color_02'=>array('type'=>'decr','elem'=>'all','test'=>'colorContrast','score'=>4,'level'=>'AA','trust'=>'0.8','top'=>1,'steps'=>1,'ref'=>'G145','scs'=>'1.4.3','dis'=>'15113'),'css_01'=>array('type'=>'decr','elem'=>'all','test'=>'lineHeightNo','score'=>3,'level'=>'aaa','trust'=>'0.8','top'=>1,'steps'=>1,'ref'=>'C21','scs'=>'1.4.8','dis'=>'15153'),'dtd_01'=>array('type'=>'fals','elem'=>'all','test'=>'dtd','score'=>3,'level'=>'a','trust'=>'1','ref'=>'H88','scs'=>'4.1.1,4.1.2','dis'=>'22232'),'ehandler_01'=>array('type'=>'true','elem'=>'ehandler','test'=>'ehandMouse','score'=>1,'level'=>'A','trust'=>'1','ref'=>'F54','scs'=>'2.1.1','dis'=>'53512'),'ehandler_02'=>array('type'=>'prop','elem'=>'ehandler','test'=>'ehandBothNo','score'=>3,'level'=>'A','trust'=>'1','ref'=>'SCR20','scs'=>'2.1.1,2.1.3','dis'=>'53511'),'ehandler_03'=>array('type'=>'true','elem'=>'ehandler','test'=>'ehandBoth','score'=>10,'level'=>'a','trust'=>'0.9','ref'=>'G90','scs'=>'2.1.1,2.1.3','dis'=>'52522'),'ehandler_04'=>array('type'=>'prop','elem'=>'ehandler','test'=>'ehandTagNo','score'=>3,'level'=>'A','trust'=>'0.8','ref'=>'F59','scs'=>'4.1.2','dis'=>'43411'),'embed_01'=>array('type'=>'prop','elem'=>'embed','test'=>'embedAltNo','score'=>3,'level'=>'A','trust'=>'0.9','ref'=>'H46','scs'=>'1.1.1,1.2.8','dis'=>'54353'),'field_01'=>array('type'=>'true','elem'=>'all','test'=>'fieldLegNo','score'=>4,'level'=>'A','trust'=>'1','ref'=>'H71','scs'=>'1.3.1,3.3.2','dis'=>'54152'),'field_02'=>array('type'=>'decr','elem'=>'all','test'=>'fieldNoForm','score'=>3,'level'=>'A','trust'=>'0.9','top'=>1,'steps'=>1,'ref'=>'H71','scs'=>'1.3.1,3.3.2','dis'=>'54152'),'focus_01'=>array('type'=>'true','elem'=>'all','test'=>'focusBlur','score'=>3,'level'=>'a','trust'=>'0.8','ref'=>'F55','scs'=>'2.1.1,2.4.7,3.2.1','dis'=>'54142'),'font_01'=>array('type'=>'decr','elem'=>'all','test'=>'fontHtml','score'=>4,'level'=>'AA','trust'=>'1','top'=>1,'steps'=>1,'ref'=>'C22','scs'=>'1.3.1,1.4.4,1.4.5,1.4.9','dis'=>'33111'),'font_02'=>array('type'=>'prop','elem'=>'fontValues','test'=>'fontAbsVal','score'=>4,'level'=>'AA','trust'=>'1','ref'=>'C12','scs'=>'1.4.4','dis'=>'15123'),'form_01a'=>array('type'=>'fals','elem'=>'form','test'=>'formSubmitNo','score'=>10,'level'=>'a','trust'=>'1','ref'=>'H32','scs'=>'3.2.2','dis'=>'21211'),'form_01b'=>array('type'=>'prop','elem'=>'form','test'=>'formSubmitNo','score'=>3,'level'=>'A','trust'=>'0.9','ref'=>'H32','scs'=>'3.2.2','dis'=>'21211'),'frame_01'=>array('type'=>'prop','elem'=>'frame','test'=>'frameTitleNo','score'=>3,'level'=>'A','trust'=>'1','ref'=>'H64','scs'=>'2.4.1,4.1.2','dis'=>'53222'),'frame_02'=>array('type'=>'true','elem'=>'frameset','test'=>'frameDtdNo','score'=>3,'level'=>'A','trust'=>'1','ref'=>'H88','scs'=>'4.1.1,4.1.2','dis'=>'22232'),'hx_01a'=>array('type'=>'fals','elem'=>'all','test'=>'hx','score'=>3,'level'=>'A','trust'=>'1','ref'=>'H42','scs'=>'1.3.1','dis'=>'54322'),'hx_01b'=>array('type'=>'true','elem'=>'all','test'=>'hx','score'=>10,'level'=>'aaa','trust'=>'0.9','ref'=>'G141','scs'=>'1.3.1,2.4.10','dis'=>'54343'),'hx_01c'=>array('type'=>'fals','elem'=>'hx','test'=>'h1','score'=>4,'level'=>'aaa','trust'=>'1','ref'=>'G141','scs'=>'1.3.1,2.4.10','dis'=>'54343'),'hx_02'=>array('type'=>'true','elem'=>'hx','test'=>'hxNo','score'=>3,'level'=>'AA','trust'=>'1','ref'=>'G130','scs'=>'2.4.6','dis'=>'54253'),'hx_03'=>array('type'=>'prop','elem'=>'hx','test'=>'hxSkip','score'=>3,'level'=>'AAA','trust'=>'1','ref'=>'G141','scs'=>'1.3.1,2.4.10','dis'=>'54343'),'id_01'=>array('type'=>'true','elem'=>'id','test'=>'idRep','score'=>3,'level'=>'A','trust'=>'1','ref'=>'F77','scs'=>'4.1.1','dis'=>'32321'),'iframe_01'=>array('type'=>'prop','elem'=>'iframe','test'=>'iframeTitleNo','score'=>3,'level'=>'A','trust'=>'1','ref'=>'H64','scs'=>'2.4.1,4.1.2','dis'=>'53222'),'img_01a'=>array('type'=>'fals','elem'=>'img','test'=>'imgAltNo','score'=>10,'level'=>'a','trust'=>'0.9','ref'=>'H37','scs'=>'1.1.1','dis'=>'53322'),'img_01b'=>array('type'=>'prop','elem'=>'img','test'=>'imgAltNo','score'=>3,'level'=>'A','trust'=>'1','ref'=>'F65','scs'=>'1.1.1','dis'=>'53322'),'img_02'=>array('type'=>'prop','elem'=>'img','test'=>'imgAltNull','score'=>8,'level'=>'a','trust'=>'1','ref'=>'C9','scs'=>'1.1.1','dis'=>'41111'),'img_03'=>array('type'=>'decr','elem'=>'img','test'=>'imgAltNot','score'=>3,'level'=>'A','trust'=>'1','top'=>1,'steps'=>1,'ref'=>'F30','scs'=>'1.1.1,1.2.1','dis'=>'53211'),'img_04'=>array('type'=>'prop','elem'=>'img','test'=>'imgAltLong','score'=>5,'level'=>'a','trust'=>'0.9','ref'=>'H45','scs'=>'1.1.1','dis'=>'54153'),'inp_img_01a'=>array('type'=>'fals','elem'=>'inpImg','test'=>'inpImgAltNo','score'=>10,'level'=>'a','trust'=>'0.9','ref'=>'H36','scs'=>'1.1.1','dis'=>'54211'),'inp_img_01b'=>array('type'=>'prop','elem'=>'inpImg','test'=>'inpImgAltNo','score'=>3,'level'=>'A','trust'=>'1','ref'=>'F65','scs'=>'1.1.1','dis'=>'53322'),'input_01'=>array('type'=>'prop','elem'=>'inputLabel','test'=>'inputIdTitleNo','score'=>3,'level'=>'A','trust'=>'1','ref'=>'H65','scs'=>'1.1.1,1.3.1,3.3.2,4.1.2','dis'=>'53122'),'input_02'=>array('type'=>'prop','elem'=>'label','test'=>'inputLabelNo','score'=>3,'level'=>'a','trust'=>'0.8','ref'=>'H44','scs'=>'1.1.1,1.3.1,3.3.2,4.1.2','dis'=>'54532'),'input_02b'=>array('type'=>'fals','elem'=>'inputLabel','test'=>'inputLabelNo','score'=>10,'level'=>'a','trust'=>'0.7','ref'=>'H44','scs'=>'1.1.1,1.3.1,3.3.2,4.1.2','dis'=>'54532'),'input_03'=>array('type'=>'true','elem'=>'all','test'=>'inputAltNo','score'=>5,'level'=>'a','trust'=>'1','ref'=>'H36','scs'=>'1.1.1','dis'=>'54211'),'justif_txt_01'=>array('type'=>'decr','elem'=>'all','test'=>'justifiedTxt','score'=>3,'level'=>'AAA','trust'=>'1','top'=>1,'steps'=>1,'ref'=>'F88','scs'=>'1.4.8','dis'=>'15152'),'justif_txt_02'=>array('type'=>'decr','elem'=>'all','test'=>'justifiedCss','score'=>3,'level'=>'AAA','trust'=>'0.9','top'=>1,'steps'=>1,'ref'=>'C19','scs'=>'1.4.8','dis'=>'14142'),'label_01'=>array('type'=>'prop','elem'=>'label','test'=>'labelForNo','score'=>3,'level'=>'A','trust'=>'1','ref'=>'F68','scs'=>'1.3.1,4.1.2','dis'=>'52523'),'label_02'=>array('type'=>'decr','elem'=>'all','test'=>'labelPosNo','score'=>3,'level'=>'A','trust'=>'0.9','top'=>1,'steps'=>1,'ref'=>'G162','scs'=>'1.3.1,3.3.2','dis'=>'43353'),'label_03'=>array('type'=>'prop','elem'=>'label','test'=>'labelTextNo','score'=>3,'level'=>'A','trust'=>'1','ref'=>'F68','scs'=>'1.3.1,4.1.2','dis'=>'52523'),'lang_01'=>array('type'=>'true','elem'=>'all','test'=>'lang','score'=>10,'level'=>'a','trust'=>'0.9','ref'=>'H57','scs'=>'3.1.1','dis'=>'53112'),'lang_02'=>array('type'=>'true','elem'=>'all','test'=>'langCodeNo','score'=>3,'level'=>'A','trust'=>'1','ref'=>'H57','scs'=>'3.1.1','dis'=>'53112'),'lang_03'=>array('type'=>'true','elem'=>'all','test'=>'langNo','score'=>3,'level'=>'A','trust'=>'1','ref'=>'H57','scs'=>'3.1.1','dis'=>'53112'),'lang_04'=>array('type'=>'true','elem'=>'all','test'=>'langMatchNo','score'=>4,'level'=>'A','trust'=>'1','ref'=>'H57','scs'=>'3.1.1','dis'=>'53112'),'lang_05'=>array('type'=>'true','elem'=>'all','test'=>'langExtra','score'=>5,'level'=>'A','trust'=>'1','ref'=>'H57','scs'=>'3.1.1','dis'=>'53112'),'layout_01a'=>array('type'=>'fals','elem'=>'all','test'=>'layoutElem','score'=>10,'level'=>'a','trust'=>'1','ref'=>'G115','scs'=>'1.3.1','dis'=>'34212'),'layout_01b'=>array('type'=>'decr','elem'=>'all','test'=>'layoutElem','score'=>5,'level'=>'A','trust'=>'1','top'=>2,'steps'=>2,'ref'=>'G115','scs'=>'1.3.1','dis'=>'34212'),'layout_02a'=>array('type'=>'fals','elem'=>'all','test'=>'layoutAttr','score'=>10,'level'=>'a','trust'=>'1','ref'=>'G140','scs'=>'1.3.1,1.4.5,1.4.9','dis'=>'25243'),'layout_02b'=>array('type'=>'decr','elem'=>'all','test'=>'layoutAttr','score'=>5,'level'=>'A','trust'=>'0.9','top'=>3,'steps'=>3,'ref'=>'G140','scs'=>'1.3.1,1.4.5,1.4.9','dis'=>'25243'),'layout_03'=>array('type'=>'decr','elem'=>'all','test'=>'layoutFixed','score'=>5,'level'=>'aa','trust'=>'1','top'=>1,'steps'=>1,'ref'=>'G146','scs'=>'1.4.4,1.4.8','dis'=>'15222'),'link_01'=>array('type'=>'true','elem'=>'all','test'=>'linkRel','score'=>10,'level'=>'aa','trust'=>'0.9','ref'=>'H59','scs'=>'2.4.5,2.4.8','dis'=>'55554'),'list_01'=>array('type'=>'decr','elem'=>'all','test'=>'liNoList','score'=>3,'level'=>'A','trust'=>'1','top'=>3,'steps'=>3,'ref'=>'H48','scs'=>'1.3.1','dis'=>'53342'),'long_01'=>array('type'=>'prop','elem'=>'longDImg','test'=>'longDNo','score'=>3,'level'=>'A','trust'=>'1','ref'=>'H45','scs'=>'1.1.1','dis'=>'54153'),'marquee_01'=>array('type'=>'true','elem'=>'all','test'=>'marquee','score'=>1,'level'=>'A','trust'=>'1','ref'=>'F16','scs'=>'2.2.2','dis'=>'45153'),'meta_01'=>array('type'=>'true','elem'=>'all','test'=>'metaRefresh','score'=>3,'level'=>'A','trust'=>'1','ref'=>'F41','scs'=>'2.2.1,2.2.4,3.2.5','dis'=>'43353'),'meta_02'=>array('type'=>'true','elem'=>'all','test'=>'metaRedir','score'=>3,'level'=>'A','trust'=>'1','ref'=>'F40','scs'=>'2.2.1,2.2.4','dis'=>'43353'),'object_01'=>array('type'=>'prop','elem'=>'object','test'=>'objectAltNo','score'=>3,'level'=>'A','trust'=>'1','ref'=>'H27','scs'=>'1.1.1','dis'=>'54152'),'scope_01'=>array('type'=>'decr','elem'=>'table','test'=>'scopeNo','score'=>3,'level'=>'A','trust'=>'1','top'=>1,'steps'=>1,'ref'=>'H63','scs'=>'1.3.1','dis'=>'53353'),'table_01'=>array('type'=>'prop','elem'=>'tableLayout','test'=>'tableLayoutCaption','score'=>3,'level'=>'A','trust'=>'1','ref'=>'F46','scs'=>'1.3.1','dis'=>'51421'),'table_02'=>array('type'=>'prop','elem'=>'tableData','test'=>'tableDataCaption','score'=>3,'level'=>'A','trust'=>'1','ref'=>'H39','scs'=>'1.3.1','dis'=>'52211'),'table_03'=>array('type'=>'prop','elem'=>'table','test'=>'tableCaptionSummary','score'=>4,'level'=>'A','trust'=>'1','ref'=>'H73','scs'=>'1.3.1','dis'=>'33152'),'table_04'=>array('type'=>'prop','elem'=>'table','test'=>'tableNested','score'=>3,'level'=>'a','trust'=>'0.9','ref'=>'F49','scs'=>'1.3.2','dis'=>'53311'),'table_05a'=>array('type'=>'decr','elem'=>'all','test'=>'tableLayout','score'=>4,'level'=>'a','trust'=>'1','top'=>1,'steps'=>1,'ref'=>'H51','scs'=>'1.3.1','dis'=>'53352'),'table_06'=>array('type'=>'decr','elem'=>'tableComplex','test'=>'tableComplexError','score'=>4,'level'=>'a','trust'=>'0.8','top'=>1,'steps'=>1,'ref'=>'H43','scs'=>'1.3.1','dis'=>'53211'),'title_01'=>array('type'=>'true','elem'=>'all','test'=>'titleVrs','score'=>3,'level'=>'A','trust'=>'1','ref'=>'H25','scs'=>'2.4.2','dis'=>'52112'),'title_02'=>array('type'=>'true','elem'=>'all','test'=>'titleNo','score'=>3,'level'=>'A','trust'=>'1','ref'=>'H25','scs'=>'2.4.2','dis'=>'52112'),'title_03'=>array('type'=>'true','elem'=>'all','test'=>'titleNull','score'=>3,'level'=>'A','trust'=>'1','ref'=>'F25','scs'=>'2.4.2','dis'=>'33151'),'title_04'=>array('type'=>'decr','elem'=>'all','test'=>'titleLong','score'=>10,'level'=>'a','trust'=>'0.9','top'=>64,'steps'=>10,'ref'=>'G88','scs'=>'2.4.2','dis'=>'42253'),'title_05'=>array('type'=>'true','elem'=>'all','test'=>'titleChars','score'=>4,'level'=>'a','trust'=>'0.9','ref'=>'G88','scs'=>'2.4.2','dis'=>'42253'),'title_06'=>array('type'=>'true','elem'=>'all','test'=>'titleOk','score'=>10,'level'=>'a','trust'=>'0.9','ref'=>'H25','scs'=>'2.4.2','dis'=>'52112'),'title_07'=>array('type'=>'true','elem'=>'all','test'=>'titleSame','score'=>4,'level'=>'A','trust'=>'1','ref'=>'F25','scs'=>'2.4.2','dis'=>'33151'),'values_01a'=>array('type'=>'decr','elem'=>'all','test'=>'valueAbsHtml','score'=>4,'level'=>'AA','trust'=>'0.9','top'=>1,'steps'=>1,'ref'=>'G146','scs'=>'1.4.4','dis'=>'15222'),'values_01b'=>array('type'=>'true','elem'=>'all','test'=>'valueRelHtml','score'=>10,'level'=>'aa','trust'=>'0.9','ref'=>'G146','scs'=>'1.4.4','dis'=>'15222'),'values_02a'=>array('type'=>'decr','elem'=>'all','test'=>'valueAbsCss','score'=>3,'level'=>'AAA','trust'=>'0.9','top'=>1,'steps'=>1,'ref'=>'C24','scs'=>'1.4.8','dis'=>'15113'),'values_02b'=>array('type'=>'true','elem'=>'all','test'=>'valueRelCss','score'=>10,'level'=>'aaa','trust'=>'1','ref'=>'C24','scs'=>'1.4.8','dis'=>'15113'),'w3c_validator_01a'=>array('type'=>'fals','elem'=>'w3cValidator','test'=>'w3cValidatorErrors','score'=>10,'level'=>'a','trust'=>'1','ref'=>'G134','scs'=>'4.1.1','dis'=>'22232'),'w3c_validator_01b'=>array('type'=>'decr','elem'=>'w3cValidator','test'=>'w3cValidatorErrors','score'=>5,'level'=>'A','trust'=>'1','top'=>10,'steps'=>10,'ref'=>'G134','scs'=>'4.1.1','dis'=>'22232'),'win_01'=>array('type'=>'true','elem'=>'all','test'=>'newWinOnLoad','score'=>3,'level'=>'A','trust'=>'0.9','ref'=>'F52','scs'=>'3.2.1','dis'=>'53454'));
$scs=array('1.1.1'=>array(0=>'text-equiv-all',1=>'A'),'1.2.1'=>array(0=>'media-equiv-av-only-alt',1=>'A'),'1.2.8'=>array(0=>'media-equiv-text-doc',1=>'AAA'),'1.3.1'=>array(0=>'content-structure-separation-programmatic',1=>'A'),'1.3.2'=>array(0=>'content-structure-separation-sequence',1=>'A'),'1.4.3'=>array(0=>'visual-audio-contrast-contrast',1=>'AA'),'1.4.4'=>array(0=>'visual-audio-contrast-scale',1=>'AA'),'1.4.5'=>array(0=>'visual-audio-contrast-text-presentation',1=>'AA'),'1.4.6'=>array(0=>'visual-audio-contrast7',1=>'AAA'),'1.4.8'=>array(0=>'visual-audio-contrast-visual-presentation',1=>'AAA'),'1.4.9'=>array(0=>'visual-audio-contrast-text-images',1=>'AAA'),'2.1.1'=>array(0=>'keyboard-operation-keyboard-operable',1=>'A'),'2.1.3'=>array(0=>'keyboard-operation-all-funcs',1=>'AAA'),'2.2.1'=>array(0=>'time-limits-required-behaviors',1=>'A'),'2.2.2'=>array(0=>'time-limits-pause',1=>'A'),'2.2.4'=>array(0=>'time-limits-postponed',1=>'AAA'),'2.4.1'=>array(0=>'navigation-mechanisms-skip',1=>'A'),'2.4.10'=>array(0=>'navigation-mechanisms-headings',1=>'AAA'),'2.4.2'=>array(0=>'navigation-mechanisms-title',1=>'A'),'2.4.4'=>array(0=>'navigation-mechanisms-refs',1=>'A'),'2.4.5'=>array(0=>'navigation-mechanisms-mult-loc',1=>'AA'),'2.4.6'=>array(0=>'navigation-mechanisms-descriptive',1=>'AA'),'2.4.7'=>array(0=>'navigation-mechanisms-focus-visible',1=>'AA'),'2.4.8'=>array(0=>'navigation-mechanisms-location',1=>'AAA'),'2.4.9'=>array(0=>'navigation-mechanisms-link',1=>'AAA'),'3.1.1'=>array(0=>'meaning-doc-lang-id',1=>'A'),'3.1.4'=>array(0=>'meaning-located',1=>'AAA'),'3.2.1'=>array(0=>'consistent-behavior-receive-focus',1=>'A'),'3.2.2'=>array(0=>'consistent-behavior-unpredictable-change',1=>'A'),'3.2.5'=>array(0=>'consistent-behavior-no-extreme-changes-context',1=>'AAA'),'3.3.2'=>array(0=>'minimize-error-cues',1=>'A'),'4.1.1'=>array(0=>'ensure-compat-parses',1=>'A'),'4.1.2'=>array(0=>'ensure-compat-rsv',1=>'A'));
?>