<?php
/**
 * Created by PhpStorm.
 * User: Vladimir Pavlov <kolobokhtc@gmail.com>
 * Date: 17.08.2017 11:41
 */

namespace JsonToHtml;


abstract class TemplateAbstract
{

    /**
     * @return string
     */
    abstract public static function getTemplate();

}