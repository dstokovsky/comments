<?php

/* BlogBundle:Post:index.html.twig */
class __TwigTemplate_8eae218ed40696a885e9deb9df19c5d6818c16efca19657d8cc7b9d552a6d327 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BlogBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <ul class=\"comments-list\">
    ";
        // line 5
        if ((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts"))) {
            // line 6
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 7
                echo "            <li class=\"comment-item\">
                <div class=\"comment-wrapper\">
                    <div class=\"post-username\"><a class=\"post-username-link\" href=\"#\">";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "username"), "html", null, true);
                echo "</a></div>
                    <div class=\"post-useremail\">";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "useremail"), "html", null, true);
                echo "</div>
                    <div class=\"post-message\">";
                // line 11
                echo $this->env->getExtension('liip_urlautoconverter')->autoConvertUrls($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "message"));
                echo "</div>
                </div>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "        <li class=\"empty\">No comments yet</li>
    ";
        }
        // line 18
        echo "    </ul>
    <div class=\"comment-form\">
        <div class=\"form-errors\"></div>
        ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"row-wrapper\">
            <div class=\"labels\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'label');
        echo ":
            </div>
            <div class=\"inputs\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"row-wrapper\">
            <div class=\"labels\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "useremail"), 'label');
        echo ":
            </div>
            <div class=\"inputs\">
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "useremail"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"row-wrapper\">
            <div class=\"labels\">
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'label');
        echo ":
            </div>
            <div class=\"inputs\">
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'widget');
        echo "
                <em>You have <span id=\"counter\"></span> characters left.</em>
            </div>
        </div>

        <div class=\"row-wrapper\">
            <div class=\"labels\">
                &nbsp;
            </div>
            <div class=\"inputs\">
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recaptcha"), 'widget');
        echo "
            </div>
        </div>

        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Post:index.html.twig";
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
