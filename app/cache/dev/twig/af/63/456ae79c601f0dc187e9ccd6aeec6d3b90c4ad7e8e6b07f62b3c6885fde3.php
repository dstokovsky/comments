<?php

/* BlogBundle::layout.html.twig */
class __TwigTemplate_af63456ae79c601f0dc187e9ccd6aeec6d3b90c4ad7e8e6b07f62b3c6885fde3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
        // line 4
        echo "    Sidebar content
";
    }

    public function getTemplateName()
    {
        return "BlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 59,  130 => 55,  117 => 45,  111 => 42,  102 => 36,  96 => 33,  87 => 27,  81 => 24,  75 => 21,  70 => 18,  66 => 16,  63 => 15,  53 => 11,  49 => 10,  45 => 9,  41 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
