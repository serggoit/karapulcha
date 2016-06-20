<?php

/* agent.html.twig */
class __TwigTemplate_841273bc3b8aa79b0dff7424f636757abba658b63d925e1cb91d9f9edefe2b64 extends Twig_Template
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
        $__internal_b3d17e45cdd594d7a2665f454b47a9edcefb8f38e9462fc8b540904f67b06861 = $this->env->getExtension("native_profiler");
        $__internal_b3d17e45cdd594d7a2665f454b47a9edcefb8f38e9462fc8b540904f67b06861->enter($__internal_b3d17e45cdd594d7a2665f454b47a9edcefb8f38e9462fc8b540904f67b06861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3d17e45cdd594d7a2665f454b47a9edcefb8f38e9462fc8b540904f67b06861->leave($__internal_b3d17e45cdd594d7a2665f454b47a9edcefb8f38e9462fc8b540904f67b06861_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_518cb84287366744cad8890366c944a0cf0d88954cb4ef59f8fa46ce73a43100 = $this->env->getExtension("native_profiler");
        $__internal_518cb84287366744cad8890366c944a0cf0d88954cb4ef59f8fa46ce73a43100->enter($__internal_518cb84287366744cad8890366c944a0cf0d88954cb4ef59f8fa46ce73a43100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1> ";
        echo twig_escape_filter($this->env, (isset($context["Yu"]) ? $context["Yu"] : $this->getContext($context, "Yu")), "html", null, true);
        echo "</h1>
";
        
        $__internal_518cb84287366744cad8890366c944a0cf0d88954cb4ef59f8fa46ce73a43100->leave($__internal_518cb84287366744cad8890366c944a0cf0d88954cb4ef59f8fa46ce73a43100_prof);

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
