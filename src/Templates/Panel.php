<?php
/**
 * Created by PhpStorm.
 * User: Vladimir Pavlov <kolobokhtc@gmail.com>
 * Date: 17.08.2017 11:40
 */

namespace JsonToHtml\Templates;

use JsonToHtml\TemplateAbstract;

class Panel extends TemplateAbstract
{
    public static function getTemplate()
    {
       return '
<div id="cpanel">
    {{#cpanel}}
      <div class="panel_section">
        <h1 class="cpanel">{{name}}</h1>
        <p>
          {{#content}}
            <button id="{{id}}">{{id}}</button>
          {{/content}}
       </p>
      </div>
    {{/cpanel}}
</div>';
    }


}