<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_f7423daccd69674c0fc40fa663680931278bb9ff11b7e49472a7697a9c4b8d82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) ? $context["group_name"] : $this->getContext($context, "group_name")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_edit\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  84 => 37,  110 => 40,  76 => 29,  134 => 66,  126 => 61,  114 => 42,  58 => 18,  65 => 20,  266 => 86,  263 => 85,  255 => 77,  234 => 46,  222 => 4,  165 => 96,  152 => 88,  150 => 85,  97 => 34,  34 => 6,  70 => 25,  53 => 18,  223 => 77,  215 => 69,  212 => 68,  205 => 31,  200 => 4,  155 => 76,  148 => 71,  146 => 68,  118 => 57,  113 => 66,  100 => 37,  81 => 24,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 78,  252 => 80,  247 => 78,  241 => 49,  229 => 73,  220 => 76,  214 => 69,  177 => 65,  169 => 60,  140 => 64,  132 => 51,  128 => 49,  107 => 38,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 32,  227 => 31,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 32,  204 => 72,  179 => 69,  159 => 93,  143 => 80,  135 => 54,  119 => 48,  102 => 27,  71 => 29,  67 => 20,  63 => 16,  59 => 17,  38 => 5,  94 => 34,  89 => 32,  85 => 38,  75 => 30,  68 => 14,  56 => 21,  87 => 25,  21 => 2,  26 => 6,  93 => 27,  88 => 38,  78 => 34,  46 => 14,  27 => 4,  44 => 8,  31 => 9,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 99,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 67,  105 => 28,  91 => 34,  62 => 19,  49 => 14,  24 => 1,  25 => 3,  19 => 2,  79 => 31,  72 => 21,  69 => 11,  47 => 12,  40 => 11,  37 => 6,  22 => 3,  246 => 90,  157 => 79,  145 => 46,  139 => 56,  131 => 52,  123 => 70,  120 => 45,  115 => 43,  111 => 55,  108 => 65,  101 => 35,  98 => 45,  96 => 46,  83 => 31,  74 => 30,  66 => 15,  55 => 15,  52 => 15,  50 => 21,  43 => 8,  41 => 7,  35 => 4,  32 => 15,  29 => 8,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 70,  133 => 55,  130 => 71,  125 => 44,  122 => 58,  116 => 43,  112 => 43,  109 => 50,  106 => 64,  103 => 37,  99 => 46,  95 => 29,  92 => 42,  86 => 28,  82 => 31,  80 => 30,  73 => 19,  64 => 26,  60 => 22,  57 => 14,  54 => 16,  51 => 17,  48 => 7,  45 => 5,  42 => 10,  39 => 3,  36 => 10,  33 => 6,  30 => 5,);
    }
}
