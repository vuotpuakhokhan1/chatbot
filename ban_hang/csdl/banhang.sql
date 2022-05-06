-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 19, 2022 lúc 07:00 AM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

DROP TABLE IF EXISTS `danh_muc`;
CREATE TABLE IF NOT EXISTS `danh_muc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `ten`) VALUES
(16, 'Nam'),
(22, 'Ná»¯'),
(23, 'Tráº» em');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

DROP TABLE IF EXISTS `hoa_don`;
CREATE TABLE IF NOT EXISTS `hoa_don` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nguoi_mua` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `hang_duoc_mua` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `ten_nguoi_mua`, `email`, `dia_chi`, `dien_thoai`, `noi_dung`, `hang_duoc_mua`) VALUES
(11, 'TÃ­n', 'nguyenbatin@gmail.com', 'pm', '0357278944', 'mua hÃ ng', '72[|||]1[|||||]'),
(12, 'Nguyen tin', 'nguyenbatin1@gmail.com', 'Phu my', '0352312', 'mua hÃ ng', '73[|||]0[|||||]74[|||]1[|||||]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

DROP TABLE IF EXISTS `san_pham`;
CREATE TABLE IF NOT EXISTS `san_pham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(255) NOT NULL,
  `hinh_anh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `thuoc_menu` int(255) NOT NULL,
  `noi_bat` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `trang_chu` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `sap_xep_trang_chu` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten`, `gia`, `hinh_anh`, `noi_dung`, `thuoc_menu`, `noi_bat`, `trang_chu`, `sap_xep_trang_chu`) VALUES
(70, 'Jordan', 2000000, 'giÃ y 3.jpg', '<p>Gi&agrave;y Nam bá»n Ä‘áº¹p</p>\r\n<p>&nbsp;</p>\r\n<p><textarea id=\"BFI_DATA\" style=\"width: 1px; height: 1px; display: none;\"></textarea></p>\r\n<div id=\"WidgetFloaterPanels\" class=\"LTRStyle\" style=\"display: none; text-align: left; direction: ltr; visibility: hidden;\" translate=\"no\">\r\n<div id=\"WidgetFloater\" style=\"display: none;\">\r\n<div id=\"WidgetLogoPanel\"><span id=\"WidgetTranslateWithSpan\">TRANSLATE with <img id=\"FloaterLogo\" alt=\"\" /></span> <span id=\"WidgetCloseButton\" title=\"Exit Translation\">x</span></div>\r\n<div id=\"LanguageMenuPanel\">\r\n<div class=\"DDStyle_outer\"><input id=\"LanguageMenu_svid\" style=\"display: none;\" autocomplete=\"on\" name=\"LanguageMenu_svid\" type=\"text\" value=\"en\" /> <input id=\"LanguageMenu_textid\" style=\"display: none;\" autocomplete=\"on\" name=\"LanguageMenu_textid\" type=\"text\" /> <span id=\"__LanguageMenu_header\" class=\"DDStyle\" tabindex=\"0\">English</span>\r\n<div style=\"position: relative; text-align: left; left: 0;\">\r\n<div style=\"position: absolute; ;left: 0px;\">\r\n<div id=\"__LanguageMenu_popup\" class=\"DDStyle\" style=\"display: none;\">\r\n<table id=\"LanguageMenu\" border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#ar\">Arabic</a></td>\r\n<td><a tabindex=\"-1\" href=\"#he\">Hebrew</a></td>\r\n<td><a tabindex=\"-1\" href=\"#pl\">Polish</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#bg\">Bulgarian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#hi\">Hindi</a></td>\r\n<td><a tabindex=\"-1\" href=\"#pt\">Portuguese</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#ca\">Catalan</a></td>\r\n<td><a tabindex=\"-1\" href=\"#mww\">Hmong Daw</a></td>\r\n<td><a tabindex=\"-1\" href=\"#ro\">Romanian</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#zh-CHS\">Chinese Simplified</a></td>\r\n<td><a tabindex=\"-1\" href=\"#hu\">Hungarian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#ru\">Russian</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#zh-CHT\">Chinese Traditional</a></td>\r\n<td><a tabindex=\"-1\" href=\"#id\">Indonesian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#sk\">Slovak</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#cs\">Czech</a></td>\r\n<td><a tabindex=\"-1\" href=\"#it\">Italian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#sl\">Slovenian</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#da\">Danish</a></td>\r\n<td><a tabindex=\"-1\" href=\"#ja\">Japanese</a></td>\r\n<td><a tabindex=\"-1\" href=\"#es\">Spanish</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#nl\">Dutch</a></td>\r\n<td><a tabindex=\"-1\" href=\"#tlh\">Klingon</a></td>\r\n<td><a tabindex=\"-1\" href=\"#sv\">Swedish</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#en\">English</a></td>\r\n<td><a tabindex=\"-1\" href=\"#ko\">Korean</a></td>\r\n<td><a tabindex=\"-1\" href=\"#th\">Thai</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#et\">Estonian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#lv\">Latvian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#tr\">Turkish</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#fi\">Finnish</a></td>\r\n<td><a tabindex=\"-1\" href=\"#lt\">Lithuanian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#uk\">Ukrainian</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#fr\">French</a></td>\r\n<td><a tabindex=\"-1\" href=\"#ms\">Malay</a></td>\r\n<td><a tabindex=\"-1\" href=\"#ur\">Urdu</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#de\">German</a></td>\r\n<td><a tabindex=\"-1\" href=\"#mt\">Maltese</a></td>\r\n<td><a tabindex=\"-1\" href=\"#vi\">Vietnamese</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#el\">Greek</a></td>\r\n<td><a tabindex=\"-1\" href=\"#no\">Norwegian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#cy\">Welsh</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#ht\">Haitian Creole</a></td>\r\n<td><a tabindex=\"-1\" href=\"#fa\">Persian</a></td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<img style=\"height: 7px; width: 17px; border-width: 0px; left: 20px;\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"CTFLinksPanel\"><span id=\"ExternalLinksPanel\"><a id=\"HelpLink\" title=\"Help\" href=\"https://go.microsoft.com/?linkid=9722454\" target=\"_blank\"> <img id=\"HelpImg\" alt=\"\" /></a> <a id=\"EmbedLink\" title=\"Get this widget for your own site\"></a> <img id=\"EmbedImg\" alt=\"\" /> <a id=\"ShareLink\" title=\"Share translated page with friends\"></a> <img id=\"ShareImg\" alt=\"\" /> </span></div>\r\n<div id=\"FloaterProgressBar\">&nbsp;</div>\r\n</div>\r\n<div id=\"WidgetFloaterCollapsed\" style=\"display: none;\">TRANSLATE with <img id=\"CollapsedLogoImg\" alt=\"\" /></div>\r\n<div id=\"FloaterSharePanel\" style=\"display: none;\">\r\n<div id=\"ShareTextDiv\"><span id=\"ShareTextSpan\"> COPY THE URL BELOW </span></div>\r\n<div id=\"ShareTextboxDiv\"><input id=\"ShareTextbox\" name=\"ShareTextbox\" readonly=\"readonly\" type=\"text\" /> <!--a id=\"TwitterLink\" title=\"Share on Twitter\"> <img id=\"TwitterImg\" /></a> <a-- id=\"FacebookLink\" title=\"Share on Facebook\"> <img id=\"FacebookImg\" /></a--> <a id=\"EmailLink\" title=\"Email this translation\"></a> <img id=\"EmailImg\" alt=\"\" /></div>\r\n<div id=\"ShareFooter\"><span id=\"ShareHelpSpan\"><a id=\"ShareHelpLink\"></a> <img id=\"ShareHelpImg\" alt=\"\" /></span> <span id=\"ShareBackSpan\"><a id=\"ShareBack\" title=\"Back To Translation\"></a> Back</span></div>\r\n<input id=\"EmailSubject\" name=\"EmailSubject\" type=\"hidden\" value=\"Check out this page in {0} translated from {1}\" /> <input id=\"EmailBody\" name=\"EmailBody\" type=\"hidden\" value=\"Translated: {0}%0d%0aOriginal: {1}%0d%0a%0d%0aAutomatic translation powered by Microsoft&reg; Translator%0d%0ahttp://www.bing.com/translator?ref=MSTWidget\" /> <input id=\"ShareHelpText\" type=\"hidden\" value=\"This link allows visitors to launch this page and automatically translate it to {0}.\" /></div>\r\n<div id=\"FloaterEmbed\" style=\"display: none;\">\r\n<div id=\"EmbedTextDiv\"><span id=\"EmbedTextSpan\">EMBED THE SNIPPET BELOW IN YOUR SITE</span> <a id=\"EmbedHelpLink\" title=\"Copy this code and place it into your HTML.\"></a> <img id=\"EmbedHelpImg\" alt=\"\" /></div>\r\n<div id=\"EmbedTextboxDiv\"><input id=\"EmbedSnippetTextBox\" name=\"EmbedSnippetTextBox\" readonly=\"readonly\" type=\"text\" value=\"&lt;div id=&#39;MicrosoftTranslatorWidget&#39; class=&#39;Dark&#39; style=&#39;color:white;background-color:#555555&#39;&gt;&lt;/div&gt;&lt;script type=&#39;text/javascript&#39;&gt;setTimeout(function(){var s=document.createElement(&#39;script&#39;);s.type=&#39;text/javascript&#39;;s.charset=&#39;UTF-8&#39;;s.src=((location &amp;&amp; location.href &amp;&amp; location.href.indexOf(&#39;https&#39;) == 0)?&#39;https://ssl.microsofttranslator.com&#39;:&#39;http://www.microsofttranslator.com&#39;)+&#39;/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&amp;ctf=true&amp;ui=true&amp;settings=manual&amp;from=en&#39;;var p=document.getElementsByTagName(&#39;head&#39;)[0]||document.documentElement;p.insertBefore(s,p.firstChild); },0);&lt;/script&gt;\" /></div>\r\n<div id=\"EmbedNoticeDiv\"><span id=\"EmbedNoticeSpan\">Enable collaborative features and customize widget: <a href=\"http://www.bing.com/widget/translator\" target=\"_blank\">Bing Webmaster Portal</a></span></div>\r\n<div id=\"EmbedFooterDiv\"><span id=\"EmbedBackSpan\"><a title=\"Back To Translation\">Back</a></span></div>\r\n</div>\r\n</div>', 16, 'co', 'co', 1),
(71, 'Nike', 200000, 'giÃ y nam.jpg', '<p>Gi&agrave;y ná»¯&nbsp; Ä‘áº¹p&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><textarea id=\"BFI_DATA\" style=\"width: 1px; height: 1px; display: none;\"></textarea></p>\r\n<div id=\"WidgetFloaterPanels\" class=\"LTRStyle\" style=\"display: none; text-align: left; direction: ltr; visibility: hidden;\" translate=\"no\">\r\n<div id=\"WidgetFloater\" style=\"display: none;\">\r\n<div id=\"WidgetLogoPanel\"><span id=\"WidgetTranslateWithSpan\">TRANSLATE with <img id=\"FloaterLogo\" alt=\"\" /></span> <span id=\"WidgetCloseButton\" title=\"Exit Translation\">x</span></div>\r\n<div id=\"LanguageMenuPanel\">\r\n<div class=\"DDStyle_outer\"><input id=\"LanguageMenu_svid\" style=\"display: none;\" autocomplete=\"on\" name=\"LanguageMenu_svid\" type=\"text\" value=\"en\" /> <input id=\"LanguageMenu_textid\" style=\"display: none;\" autocomplete=\"on\" name=\"LanguageMenu_textid\" type=\"text\" /> <span id=\"__LanguageMenu_header\" class=\"DDStyle\" tabindex=\"0\">English</span>\r\n<div style=\"position: relative; text-align: left; left: 0;\">\r\n<div style=\"position: absolute; ;left: 0px;\">\r\n<div id=\"__LanguageMenu_popup\" class=\"DDStyle\" style=\"display: none;\">\r\n<table id=\"LanguageMenu\" border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#ar\">Arabic</a></td>\r\n<td><a tabindex=\"-1\" href=\"#he\">Hebrew</a></td>\r\n<td><a tabindex=\"-1\" href=\"#pl\">Polish</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#bg\">Bulgarian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#hi\">Hindi</a></td>\r\n<td><a tabindex=\"-1\" href=\"#pt\">Portuguese</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#ca\">Catalan</a></td>\r\n<td><a tabindex=\"-1\" href=\"#mww\">Hmong Daw</a></td>\r\n<td><a tabindex=\"-1\" href=\"#ro\">Romanian</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#zh-CHS\">Chinese Simplified</a></td>\r\n<td><a tabindex=\"-1\" href=\"#hu\">Hungarian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#ru\">Russian</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#zh-CHT\">Chinese Traditional</a></td>\r\n<td><a tabindex=\"-1\" href=\"#id\">Indonesian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#sk\">Slovak</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#cs\">Czech</a></td>\r\n<td><a tabindex=\"-1\" href=\"#it\">Italian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#sl\">Slovenian</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#da\">Danish</a></td>\r\n<td><a tabindex=\"-1\" href=\"#ja\">Japanese</a></td>\r\n<td><a tabindex=\"-1\" href=\"#es\">Spanish</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#nl\">Dutch</a></td>\r\n<td><a tabindex=\"-1\" href=\"#tlh\">Klingon</a></td>\r\n<td><a tabindex=\"-1\" href=\"#sv\">Swedish</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#en\">English</a></td>\r\n<td><a tabindex=\"-1\" href=\"#ko\">Korean</a></td>\r\n<td><a tabindex=\"-1\" href=\"#th\">Thai</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#et\">Estonian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#lv\">Latvian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#tr\">Turkish</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#fi\">Finnish</a></td>\r\n<td><a tabindex=\"-1\" href=\"#lt\">Lithuanian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#uk\">Ukrainian</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#fr\">French</a></td>\r\n<td><a tabindex=\"-1\" href=\"#ms\">Malay</a></td>\r\n<td><a tabindex=\"-1\" href=\"#ur\">Urdu</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#de\">German</a></td>\r\n<td><a tabindex=\"-1\" href=\"#mt\">Maltese</a></td>\r\n<td><a tabindex=\"-1\" href=\"#vi\">Vietnamese</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#el\">Greek</a></td>\r\n<td><a tabindex=\"-1\" href=\"#no\">Norwegian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#cy\">Welsh</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#ht\">Haitian Creole</a></td>\r\n<td><a tabindex=\"-1\" href=\"#fa\">Persian</a></td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<img style=\"height: 7px; width: 17px; border-width: 0px; left: 20px;\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"CTFLinksPanel\"><span id=\"ExternalLinksPanel\"><a id=\"HelpLink\" title=\"Help\" href=\"https://go.microsoft.com/?linkid=9722454\" target=\"_blank\"> <img id=\"HelpImg\" alt=\"\" /></a> <a id=\"EmbedLink\" title=\"Get this widget for your own site\"></a> <img id=\"EmbedImg\" alt=\"\" /> <a id=\"ShareLink\" title=\"Share translated page with friends\"></a> <img id=\"ShareImg\" alt=\"\" /> </span></div>\r\n<div id=\"FloaterProgressBar\">&nbsp;</div>\r\n</div>\r\n<div id=\"WidgetFloaterCollapsed\" style=\"display: none;\">TRANSLATE with <img id=\"CollapsedLogoImg\" alt=\"\" /></div>\r\n<div id=\"FloaterSharePanel\" style=\"display: none;\">\r\n<div id=\"ShareTextDiv\"><span id=\"ShareTextSpan\"> COPY THE URL BELOW </span></div>\r\n<div id=\"ShareTextboxDiv\"><input id=\"ShareTextbox\" name=\"ShareTextbox\" readonly=\"readonly\" type=\"text\" /> <!--a id=\"TwitterLink\" title=\"Share on Twitter\"> <img id=\"TwitterImg\" /></a> <a-- id=\"FacebookLink\" title=\"Share on Facebook\"> <img id=\"FacebookImg\" /></a--> <a id=\"EmailLink\" title=\"Email this translation\"></a> <img id=\"EmailImg\" alt=\"\" /></div>\r\n<div id=\"ShareFooter\"><span id=\"ShareHelpSpan\"><a id=\"ShareHelpLink\"></a> <img id=\"ShareHelpImg\" alt=\"\" /></span> <span id=\"ShareBackSpan\"><a id=\"ShareBack\" title=\"Back To Translation\"></a> Back</span></div>\r\n<input id=\"EmailSubject\" name=\"EmailSubject\" type=\"hidden\" value=\"Check out this page in {0} translated from {1}\" /> <input id=\"EmailBody\" name=\"EmailBody\" type=\"hidden\" value=\"Translated: {0}%0d%0aOriginal: {1}%0d%0a%0d%0aAutomatic translation powered by Microsoft&reg; Translator%0d%0ahttp://www.bing.com/translator?ref=MSTWidget\" /> <input id=\"ShareHelpText\" type=\"hidden\" value=\"This link allows visitors to launch this page and automatically translate it to {0}.\" /></div>\r\n<div id=\"FloaterEmbed\" style=\"display: none;\">\r\n<div id=\"EmbedTextDiv\"><span id=\"EmbedTextSpan\">EMBED THE SNIPPET BELOW IN YOUR SITE</span> <a id=\"EmbedHelpLink\" title=\"Copy this code and place it into your HTML.\"></a> <img id=\"EmbedHelpImg\" alt=\"\" /></div>\r\n<div id=\"EmbedTextboxDiv\"><input id=\"EmbedSnippetTextBox\" name=\"EmbedSnippetTextBox\" readonly=\"readonly\" type=\"text\" value=\"&lt;div id=&#39;MicrosoftTranslatorWidget&#39; class=&#39;Dark&#39; style=&#39;color:white;background-color:#555555&#39;&gt;&lt;/div&gt;&lt;script type=&#39;text/javascript&#39;&gt;setTimeout(function(){var s=document.createElement(&#39;script&#39;);s.type=&#39;text/javascript&#39;;s.charset=&#39;UTF-8&#39;;s.src=((location &amp;&amp; location.href &amp;&amp; location.href.indexOf(&#39;https&#39;) == 0)?&#39;https://ssl.microsofttranslator.com&#39;:&#39;http://www.microsofttranslator.com&#39;)+&#39;/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&amp;ctf=true&amp;ui=true&amp;settings=manual&amp;from=en&#39;;var p=document.getElementsByTagName(&#39;head&#39;)[0]||document.documentElement;p.insertBefore(s,p.firstChild); },0);&lt;/script&gt;\" /></div>\r\n<div id=\"EmbedNoticeDiv\"><span id=\"EmbedNoticeSpan\">Enable collaborative features and customize widget: <a href=\"http://www.bing.com/widget/translator\" target=\"_blank\">Bing Webmaster Portal</a></span></div>\r\n<div id=\"EmbedFooterDiv\"><span id=\"EmbedBackSpan\"><a title=\"Back To Translation\">Back</a></span></div>\r\n</div>\r\n</div>', 22, 'co', 'co', 2),
(72, 'Adidas', 3000000, 'giÃ y 5.jpg', '<p>Gi&agrave;y tráº» em&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><textarea id=\"BFI_DATA\" style=\"width: 1px; height: 1px; display: none;\"></textarea></p>\r\n<div id=\"WidgetFloaterPanels\" class=\"LTRStyle\" style=\"display: none; text-align: left; direction: ltr; visibility: hidden;\" translate=\"no\">\r\n<div id=\"WidgetFloater\" style=\"display: none;\">\r\n<div id=\"WidgetLogoPanel\"><span id=\"WidgetTranslateWithSpan\">TRANSLATE with <img id=\"FloaterLogo\" alt=\"\" /></span> <span id=\"WidgetCloseButton\" title=\"Exit Translation\">x</span></div>\r\n<div id=\"LanguageMenuPanel\">\r\n<div class=\"DDStyle_outer\"><input id=\"LanguageMenu_svid\" style=\"display: none;\" autocomplete=\"on\" name=\"LanguageMenu_svid\" type=\"text\" value=\"en\" /> <input id=\"LanguageMenu_textid\" style=\"display: none;\" autocomplete=\"on\" name=\"LanguageMenu_textid\" type=\"text\" /> <span id=\"__LanguageMenu_header\" class=\"DDStyle\" tabindex=\"0\">English</span>\r\n<div style=\"position: relative; text-align: left; left: 0;\">\r\n<div style=\"position: absolute; ;left: 0px;\">\r\n<div id=\"__LanguageMenu_popup\" class=\"DDStyle\" style=\"display: none;\">\r\n<table id=\"LanguageMenu\" border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#ar\">Arabic</a></td>\r\n<td><a tabindex=\"-1\" href=\"#he\">Hebrew</a></td>\r\n<td><a tabindex=\"-1\" href=\"#pl\">Polish</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#bg\">Bulgarian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#hi\">Hindi</a></td>\r\n<td><a tabindex=\"-1\" href=\"#pt\">Portuguese</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#ca\">Catalan</a></td>\r\n<td><a tabindex=\"-1\" href=\"#mww\">Hmong Daw</a></td>\r\n<td><a tabindex=\"-1\" href=\"#ro\">Romanian</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#zh-CHS\">Chinese Simplified</a></td>\r\n<td><a tabindex=\"-1\" href=\"#hu\">Hungarian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#ru\">Russian</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#zh-CHT\">Chinese Traditional</a></td>\r\n<td><a tabindex=\"-1\" href=\"#id\">Indonesian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#sk\">Slovak</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#cs\">Czech</a></td>\r\n<td><a tabindex=\"-1\" href=\"#it\">Italian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#sl\">Slovenian</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#da\">Danish</a></td>\r\n<td><a tabindex=\"-1\" href=\"#ja\">Japanese</a></td>\r\n<td><a tabindex=\"-1\" href=\"#es\">Spanish</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#nl\">Dutch</a></td>\r\n<td><a tabindex=\"-1\" href=\"#tlh\">Klingon</a></td>\r\n<td><a tabindex=\"-1\" href=\"#sv\">Swedish</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#en\">English</a></td>\r\n<td><a tabindex=\"-1\" href=\"#ko\">Korean</a></td>\r\n<td><a tabindex=\"-1\" href=\"#th\">Thai</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#et\">Estonian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#lv\">Latvian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#tr\">Turkish</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#fi\">Finnish</a></td>\r\n<td><a tabindex=\"-1\" href=\"#lt\">Lithuanian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#uk\">Ukrainian</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#fr\">French</a></td>\r\n<td><a tabindex=\"-1\" href=\"#ms\">Malay</a></td>\r\n<td><a tabindex=\"-1\" href=\"#ur\">Urdu</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#de\">German</a></td>\r\n<td><a tabindex=\"-1\" href=\"#mt\">Maltese</a></td>\r\n<td><a tabindex=\"-1\" href=\"#vi\">Vietnamese</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#el\">Greek</a></td>\r\n<td><a tabindex=\"-1\" href=\"#no\">Norwegian</a></td>\r\n<td><a tabindex=\"-1\" href=\"#cy\">Welsh</a></td>\r\n</tr>\r\n<tr>\r\n<td><a tabindex=\"-1\" href=\"#ht\">Haitian Creole</a></td>\r\n<td><a tabindex=\"-1\" href=\"#fa\">Persian</a></td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<img style=\"height: 7px; width: 17px; border-width: 0px; left: 20px;\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"CTFLinksPanel\"><span id=\"ExternalLinksPanel\"><a id=\"HelpLink\" title=\"Help\" href=\"https://go.microsoft.com/?linkid=9722454\" target=\"_blank\"> <img id=\"HelpImg\" alt=\"\" /></a> <a id=\"EmbedLink\" title=\"Get this widget for your own site\"></a> <img id=\"EmbedImg\" alt=\"\" /> <a id=\"ShareLink\" title=\"Share translated page with friends\"></a> <img id=\"ShareImg\" alt=\"\" /> </span></div>\r\n<div id=\"FloaterProgressBar\">&nbsp;</div>\r\n</div>\r\n<div id=\"WidgetFloaterCollapsed\" style=\"display: none;\">TRANSLATE with <img id=\"CollapsedLogoImg\" alt=\"\" /></div>\r\n<div id=\"FloaterSharePanel\" style=\"display: none;\">\r\n<div id=\"ShareTextDiv\"><span id=\"ShareTextSpan\"> COPY THE URL BELOW </span></div>\r\n<div id=\"ShareTextboxDiv\"><input id=\"ShareTextbox\" name=\"ShareTextbox\" readonly=\"readonly\" type=\"text\" /> <!--a id=\"TwitterLink\" title=\"Share on Twitter\"> <img id=\"TwitterImg\" /></a> <a-- id=\"FacebookLink\" title=\"Share on Facebook\"> <img id=\"FacebookImg\" /></a--> <a id=\"EmailLink\" title=\"Email this translation\"></a> <img id=\"EmailImg\" alt=\"\" /></div>\r\n<div id=\"ShareFooter\"><span id=\"ShareHelpSpan\"><a id=\"ShareHelpLink\"></a> <img id=\"ShareHelpImg\" alt=\"\" /></span> <span id=\"ShareBackSpan\"><a id=\"ShareBack\" title=\"Back To Translation\"></a> Back</span></div>\r\n<input id=\"EmailSubject\" name=\"EmailSubject\" type=\"hidden\" value=\"Check out this page in {0} translated from {1}\" /> <input id=\"EmailBody\" name=\"EmailBody\" type=\"hidden\" value=\"Translated: {0}%0d%0aOriginal: {1}%0d%0a%0d%0aAutomatic translation powered by Microsoft&reg; Translator%0d%0ahttp://www.bing.com/translator?ref=MSTWidget\" /> <input id=\"ShareHelpText\" type=\"hidden\" value=\"This link allows visitors to launch this page and automatically translate it to {0}.\" /></div>\r\n<div id=\"FloaterEmbed\" style=\"display: none;\">\r\n<div id=\"EmbedTextDiv\"><span id=\"EmbedTextSpan\">EMBED THE SNIPPET BELOW IN YOUR SITE</span> <a id=\"EmbedHelpLink\" title=\"Copy this code and place it into your HTML.\"></a> <img id=\"EmbedHelpImg\" alt=\"\" /></div>\r\n<div id=\"EmbedTextboxDiv\"><input id=\"EmbedSnippetTextBox\" name=\"EmbedSnippetTextBox\" readonly=\"readonly\" type=\"text\" value=\"&lt;div id=&#39;MicrosoftTranslatorWidget&#39; class=&#39;Dark&#39; style=&#39;color:white;background-color:#555555&#39;&gt;&lt;/div&gt;&lt;script type=&#39;text/javascript&#39;&gt;setTimeout(function(){var s=document.createElement(&#39;script&#39;);s.type=&#39;text/javascript&#39;;s.charset=&#39;UTF-8&#39;;s.src=((location &amp;&amp; location.href &amp;&amp; location.href.indexOf(&#39;https&#39;) == 0)?&#39;https://ssl.microsofttranslator.com&#39;:&#39;http://www.microsofttranslator.com&#39;)+&#39;/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&amp;ctf=true&amp;ui=true&amp;settings=manual&amp;from=en&#39;;var p=document.getElementsByTagName(&#39;head&#39;)[0]||document.documentElement;p.insertBefore(s,p.firstChild); },0);&lt;/script&gt;\" /></div>\r\n<div id=\"EmbedNoticeDiv\"><span id=\"EmbedNoticeSpan\">Enable collaborative features and customize widget: <a href=\"http://www.bing.com/widget/translator\" target=\"_blank\">Bing Webmaster Portal</a></span></div>\r\n<div id=\"EmbedFooterDiv\"><span id=\"EmbedBackSpan\"><a title=\"Back To Translation\">Back</a></span></div>\r\n</div>\r\n</div>', 23, '', 'co', 3),
(74, 'giÃ y nam', 1234, 'dunk-high-retro-se-shoes-tXRLdK.jpg', '<p>gi&agrave;y nam</p>\r\n', 16, 'co', 'co', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_quan_tri`
--

DROP TABLE IF EXISTS `thong_tin_quan_tri`;
CREATE TABLE IF NOT EXISTS `thong_tin_quan_tri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tai_khoan` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thong_tin_quan_tri`
--

INSERT INTO `thong_tin_quan_tri` (`id`, `tai_khoan`, `mat_khau`) VALUES
(1, 'admin', 'd9b1d7db4cd6e70935368a1efb10e377');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tennsd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `tennsd`, `email`) VALUES
(1, 'admin', '123', 'Quan Tri Vien', 'admin@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
