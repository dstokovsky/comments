<?php

/* BlogBundle:Post:comment-item.html.twig */
class __TwigTemplate_77941b636bad8c4b2450e0aa3b95c4733b822ca046ef22b0dce3527cdb71b93f extends Twig_Template
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
        // line 1
        echo "<li class=\"comment-item\">
    <div class=\"comment-wrapper\">
        <div class=\"post-username\"><a class=\"post-username-link\" href=\"#\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "username"), "html", null, true);
        echo "</a></div>
        <div class=\"post-useremail\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "useremail"), "html", null, true);
        echo "</div>
        <div class=\"post-message\">";
        // line 5
        echo $this->env->getExtension('liip_urlautoconverter')->autoConvertUrls($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "message"));
        echo "</div>
    </div>
</li>";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Post:comment-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,  145 => 53,  138 => 49,  125 => 39,  119 => 36,  110 => 30,  104 => 27,  95 => 21,  89 => 18,  83 => 15,  78 => 12,  74 => 10,  71 => 9,  57 => 8,  54 => 7,  36 => 6,  34 => 5,  31 => 5,  28 => 3,);
    }
}
