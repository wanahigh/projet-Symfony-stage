<?php

/* AcmeHomeBundle:Default:index.html.twig */
class __TwigTemplate_980f8dbcdb44fa2ef91ac0882e6dbabffc82b0a0831aa1ea53439ce98e64d224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeHomeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42bae97432b229c589278d730b2b7a6706c7e79e6a61fd59ee05c2a3cfd6b42d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42bae97432b229c589278d730b2b7a6706c7e79e6a61fd59ee05c2a3cfd6b42d->enter($__internal_42bae97432b229c589278d730b2b7a6706c7e79e6a61fd59ee05c2a3cfd6b42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHomeBundle:Default:index.html.twig"));

        $__internal_3869c6c03bb6cbee413b1497e4c7f67dd8d2f8e7c8d174a2e47cdf2765fafebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3869c6c03bb6cbee413b1497e4c7f67dd8d2f8e7c8d174a2e47cdf2765fafebd->enter($__internal_3869c6c03bb6cbee413b1497e4c7f67dd8d2f8e7c8d174a2e47cdf2765fafebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHomeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42bae97432b229c589278d730b2b7a6706c7e79e6a61fd59ee05c2a3cfd6b42d->leave($__internal_42bae97432b229c589278d730b2b7a6706c7e79e6a61fd59ee05c2a3cfd6b42d_prof);

        
        $__internal_3869c6c03bb6cbee413b1497e4c7f67dd8d2f8e7c8d174a2e47cdf2765fafebd->leave($__internal_3869c6c03bb6cbee413b1497e4c7f67dd8d2f8e7c8d174a2e47cdf2765fafebd_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_886cd93292c943f2c947a7804295e0c533ff83dd8c9a76f1da4ed3e78d964281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_886cd93292c943f2c947a7804295e0c533ff83dd8c9a76f1da4ed3e78d964281->enter($__internal_886cd93292c943f2c947a7804295e0c533ff83dd8c9a76f1da4ed3e78d964281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1449dd4593ee83367dbdaed2a4bfc244a64dfda494ea6a545ff7ad8d3173feff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1449dd4593ee83367dbdaed2a4bfc244a64dfda494ea6a545ff7ad8d3173feff->enter($__internal_1449dd4593ee83367dbdaed2a4bfc244a64dfda494ea6a545ff7ad8d3173feff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Fluid jumbotron</h1>
            <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>


    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Fluid jumbotron</h1>
            <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>


    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Fluid jumbotron</h1>
            <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>

    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Fluid jumbotron</h1>
            <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Fluid jumbotron</h1>
            <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div><div class=\"jumbotron jumbotron-fluid\">
    <div class=\"container\">
        <h1 class=\"display-3\">Fluid jumbotron</h1>
        <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
</div>



";
        
        $__internal_1449dd4593ee83367dbdaed2a4bfc244a64dfda494ea6a545ff7ad8d3173feff->leave($__internal_1449dd4593ee83367dbdaed2a4bfc244a64dfda494ea6a545ff7ad8d3173feff_prof);

        
        $__internal_886cd93292c943f2c947a7804295e0c533ff83dd8c9a76f1da4ed3e78d964281->leave($__internal_886cd93292c943f2c947a7804295e0c533ff83dd8c9a76f1da4ed3e78d964281_prof);

    }

    public function getTemplateName()
    {
        return "AcmeHomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\"  %}


{% block body  %}
    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Fluid jumbotron</h1>
            <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>


    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Fluid jumbotron</h1>
            <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>


    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Fluid jumbotron</h1>
            <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>

    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Fluid jumbotron</h1>
            <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Fluid jumbotron</h1>
            <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div><div class=\"jumbotron jumbotron-fluid\">
    <div class=\"container\">
        <h1 class=\"display-3\">Fluid jumbotron</h1>
        <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
</div>



{% endblock %}", "AcmeHomeBundle:Default:index.html.twig", "/var/www/html/Projet-Symfony-master/src/Acme/AdminBundle/Resources/views/Default/index.html.twig");
    }
}
