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
        $__internal_a8dcedf3a50d1b428df8d526a4ed14777f9712062da577dfde61052875f53aeb = $this->env->getExtension("native_profiler");
        $__internal_a8dcedf3a50d1b428df8d526a4ed14777f9712062da577dfde61052875f53aeb->enter($__internal_a8dcedf3a50d1b428df8d526a4ed14777f9712062da577dfde61052875f53aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8dcedf3a50d1b428df8d526a4ed14777f9712062da577dfde61052875f53aeb->leave($__internal_a8dcedf3a50d1b428df8d526a4ed14777f9712062da577dfde61052875f53aeb_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8ab925ca35125e9ef48f9b1acb00afc40fc269de122e2132a3ecf1718728c48 = $this->env->getExtension("native_profiler");
        $__internal_c8ab925ca35125e9ef48f9b1acb00afc40fc269de122e2132a3ecf1718728c48->enter($__internal_c8ab925ca35125e9ef48f9b1acb00afc40fc269de122e2132a3ecf1718728c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "  
    <h1> ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["Yu"]) ? $context["Yu"] : $this->getContext($context, "Yu")), "html", null, true);
        echo "</h1>
<form role=\"form\" class=\"form\">
        <div class=\"row\">
              <div class=\"col-sm-2 col-md-2\">
             ";
        // line 12
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t          </div>
</div>
</form>
";
        
        $__internal_c8ab925ca35125e9ef48f9b1acb00afc40fc269de122e2132a3ecf1718728c48->leave($__internal_c8ab925ca35125e9ef48f9b1acb00afc40fc269de122e2132a3ecf1718728c48_prof);

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
        return array (  50 => 12,  43 => 8,  40 => 7,  34 => 6,  11 => 2,);
    }
}
/* {# app/Resources/views/agent.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* */
/* {% block body %}*/
/*   */
/*     <h1> {{ Yu }}</h1>*/
/* <form role="form" class="form">*/
/*         <div class="row">*/
/*               <div class="col-sm-2 col-md-2">*/
/*              {{parent()}}*/
/* 	          </div>*/
/* </div>*/
/* </form>*/
/* {% endblock %}*/
/* */
