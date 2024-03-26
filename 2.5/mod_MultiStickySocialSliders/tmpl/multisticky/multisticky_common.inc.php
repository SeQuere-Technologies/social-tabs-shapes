<?php
/**
* @Copyright Copyright (C) 2010- ... Hiral Padsumbiya
 * @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
 * mod_socialfancyslider is Commercial software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
**/

// no direct access

function ms3_fblb_truncate($ms3text, $ms3_length = 100, $ms3ending = '...', $msexact = true, $ms3_considerHtml = false)
{
	if ($ms3_considerHtml)
	{
		// if the plain text is shorter than the maximum length, return the whole text
		if (strlen(preg_replace('/<.*?>/', '', $ms3text)) <= $ms3_length)
		{
			return $ms3text;
		}
		// splits all html-tags to scanable lines
		preg_match_all('/(<.+?>)?([^<>]*)/s', $ms3text, $linesms3, PREG_SET_ORDER);
		$ms3ttotal_length = strlen($ms3ending);
		$msopen_tags = array();
		$ms3_truncate = '';
		foreach ($linesms3 as $ms3_line_matchings)
		{
			// if there is any html-tag in this line, handle it and add it (uncounted) to the output
			if (!empty($ms3_line_matchings[1]))
			{
				// if it's an "empty element" with or without xhtml-conform closing slash (f.e. <br/>)
				if (preg_match('/^<(\s*.+?\/\s*|\s*(img|br|input|hr|area|base|basefont|col|frame|isindex|link|meta|param)(\s.+?)?)>$/is', $ms3_line_matchings[1]))
				{
					// do nothing
					// if tag is a closing tag (f.e. </b>)
				}
				else if (preg_match('/^<\s*\/([^\s]+?)\s*>$/s', $ms3_line_matchings[1], $ms3_tag_matchings))
				{
					// delete tag from $msopen_tags list
					$mspos = array_search($ms3_tag_matchings[1], $msopen_tags);
					if ($mspos !== false)
					{
						unset($msopen_tags[$mspos]);
					}
					// if tag is an opening tag (f.e. <b>)
				}
				else if (preg_match('/^<\s*([^\s>!]+).*?>$/s', $ms3_line_matchings[1], $ms3_tag_matchings))
				{
					// add tag to the beginning of $msopen_tags list
					array_unshift($msopen_tags, strtolower($ms3_tag_matchings[1]));
				}
				// add html-tag to $ms3_truncate'd text
				$ms3_truncate .= $ms3_line_matchings[1];
			}
			// calculate the length of the plain text part of the line; handle entities as one character
			$ms3_content_length = strlen(preg_replace('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|[0-9a-f]{1,6};/i', ' ', $ms3_line_matchings[2]));
			if ($ms3ttotal_length + $ms3_content_length > $ms3_length)
			{
				// the number of characters which are left
				$ms3left = $ms3_length - $ms3ttotal_length;
				$ms3entities_length = 0;
				// search for html entities
				if (preg_match_all('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|[0-9a-f]{1,6};/i', $ms3_line_matchings[2], $ms_tities, PREG_OFFSET_CAPTURE))
				{
					// calculate the real length of all entities in the legal range
					foreach ($ms_tities[0] as $ms3multientity)
					{
						if ($ms3multientity[1] + 1 - $ms3entities_length <= $ms3left)
						{
							$ms3left--;
							$ms3entities_length += strlen($ms3multientity[0]);
						}
						else
						{
							// no more characters left
							break;
						}
					}
				}
				$ms3_truncate .= substr($ms3_line_matchings[2], 0, $ms3left + $ms3entities_length);
				// maximum lenght is reached, so get off the loop
				break;
			}
			else
			{
				$ms3_truncate .= $ms3_line_matchings[2];
				$ms3ttotal_length += $ms3_content_length;
			}
			// if the maximum length is reached, get off the loop
			if ($ms3ttotal_length >= $ms3_length)
			{
				break;
			}
		}
	}
	else
	{
		if (strlen($ms3text) <= $ms3_length)
		{
			return $ms3text;
		}
		else
		{
			$ms3_truncate = substr($ms3text, 0, $ms3_length - strlen($ms3ending));
		}
	}
	// if the words shouldn't be cut in the middle...
	if (!$msexact)
	{
		// ...search the last occurance of a space...
		$ms3_spacepos = strrpos($ms3_truncate, ' ');
		if (isset($ms3_spacepos))
		{
			// ...and cut the text in this position
			$ms3_truncate = substr($ms3_truncate, 0, $ms3_spacepos);
		}
	}
	// add the defined ending to the text
	$ms3_truncate .= $ms3ending;
	if ($ms3_considerHtml)
	{
		// close all unclosed html-tags
		foreach ($msopen_tags as $tagms)
		{
			$ms3_truncate .= '</' . $tagms . '>';
		}
	}
	return $ms3_truncate;
}

function ms3_fblb_DetectMobile($ms3_uuseragent)
{
	if (preg_match('/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od|ad)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $ms3_uuseragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i', substr($ms3_uuseragent, 0, 4)))
	{
		return true;
	}
	else
	{
		return false;
	}
}
?>