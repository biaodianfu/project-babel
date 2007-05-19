<?php
/* Project Babel
 *
 * Author: Livid Liu <v2ex.livid@mac.com>
 * File: /htdocs/core/WidgetCore.php
 * Usage: Comman parts on pages
 * Format: 1 tab indent(4 spaces), LF, UTF-8, no-BOM
 *  
 * Subversion Keywords:
 *
 * $Id$
 * $Date$
 * $Revision$
 * $Author$
 * $URL$
 *
 * Copyright (C) 2006 Livid Liu <v2ex.livid@mac.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software Foundation,
 * Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

if (@V2EX_BABEL != 1) {
	die('<strong>Project Babel</strong><br /><br />Made by <a href="http://labs.v2ex.com/">V2EX Labs</a> | software for internet');
}

class Widget {
	public static function vxDryAbout() {
	}
	
	public static function vxIngAbout() {
		/* Start: About Ing */
		_v_b_l_s();
		_v_ico_silk('hourglass');
		echo(' 关于 ' . Vocabulary::term_ing . ' <span class="tip_i"><small>alpha</small></span>');
		echo('<br /><br />');
		echo('<span class="tip">');
		echo('你有很多话要说。你每天的生活都很精彩。你总能发现别人没有注意到的细节。<br /><br />那就尽情说吧，这个世界在听。');
		_v_hr();
		echo("<span class=" . '"tip"' . '><small>What are you doing?</small> | 同类优质服务&nbsp;&nbsp;<span class="tip_i"><img src="/img/favicons/twitter.png" align="absmiddle" /><a href="http://www.twitter.com/" target="_blank" class="t">&nbsp;Twitter&nbsp;<img src="/img/ext.png" border="0" align="absmiddle" />&nbsp;</a></span></span>');
		echo('</span>');
		_v_d_e();
		/* End: About Ing */
	}

	public static function vxPixAbout() {
		/* Start: About Pix */
		_v_b_l_s();
		_v_ico_silk('images');
		echo(' 关于 ' . Vocabulary::term_pix . ' <span class="tip_i"><small>alpha</small></span>');
		echo('<br /><br />');
		echo('<span class="tip">');
		echo('PIX 是一个帮助你保存图片的工具，图片是具有超级表现力的事物。<br /><br />PIX 并不提供无限空间，你只能在 PIX 中上传最多 <strong>' . BABEL_PIX_UPLOAD_LIMIT . '</strong> 张照片，因此，PIX 意味着精挑细选。');
		_v_hr();
		echo("<span class=" . '"tip"' . '><small>Show Yourself</small> | 同类优质服务&nbsp;&nbsp;<span class="tip_i"><img src="/img/favicons/flickr.png" align="absmiddle" /><a href="http://www.flickr.com/" target="_blank" class="t">&nbsp;Flickr&nbsp;<img src="/img/ext.png" border="0" align="absmiddle" />&nbsp;</a> | <img src="/img/favicons/photobucket.png" align="absmiddle" /><a href="http://www.photobucket.com/" target="_blank" class="t">&nbsp;Photobucket&nbsp;<img src="/img/ext.png" border="0" align="absmiddle" />&nbsp;</a></span></span>');
		echo('</span>');
		_v_d_e();
		/* End: About Pix */
	}
	
	public static function vxZenAbout() {
	}
}
?>
