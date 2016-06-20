<?php

/* agent.html.twig */
class __TwigTemplate_459969d55e4b578364a6c3c99ac4d43f5f93ccaa9d82cedeeec605a059756c36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "agent.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <h1> ";
        echo twig_escape_filter($this->env, (isset($context["Yu"]) ? $context["Yu"] : null), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "agent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/agent.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1> {{ Yu }}</h1>*/
/* {% endblock %}*/
