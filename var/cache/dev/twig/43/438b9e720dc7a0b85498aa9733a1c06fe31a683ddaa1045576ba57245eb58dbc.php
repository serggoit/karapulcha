<?php

/* agent.html.twig */
class __TwigTemplate_35a94a8434a82708783f20e543e3a1ab6480510e659fa6522b3fdd219e9685a4 extends Twig_Template
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
        $__internal_9ad3c3bfc961532bd8c8da27b2a51aade11e619913f9816417c305f0ba13550a = $this->env->getExtension("native_profiler");
        $__internal_9ad3c3bfc961532bd8c8da27b2a51aade11e619913f9816417c305f0ba13550a->enter($__internal_9ad3c3bfc961532bd8c8da27b2a51aade11e619913f9816417c305f0ba13550a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ad3c3bfc961532bd8c8da27b2a51aade11e619913f9816417c305f0ba13550a->leave($__internal_9ad3c3bfc961532bd8c8da27b2a51aade11e619913f9816417c305f0ba13550a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_86e4febdeebfe8af13e3e7a2a00c9ef14667bfff63865fbb1724d334cd7c8e91 = $this->env->getExtension("native_profiler");
        $__internal_86e4febdeebfe8af13e3e7a2a00c9ef14667bfff63865fbb1724d334cd7c8e91->enter($__internal_86e4febdeebfe8af13e3e7a2a00c9ef14667bfff63865fbb1724d334cd7c8e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1> ";
        echo twig_escape_filter($this->env, (isset($context["Yu"]) ? $context["Yu"] : $this->getContext($context, "Yu")), "html", null, true);
        echo "</h1>
";
        
        $__internal_86e4febdeebfe8af13e3e7a2a00c9ef14667bfff63865fbb1724d334cd7c8e91->leave($__internal_86e4febdeebfe8af13e3e7a2a00c9ef14667bfff63865fbb1724d334cd7c8e91_prof);

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
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/agent.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1> {{ Yu }}</h1>*/
/* {% endblock %}*/
