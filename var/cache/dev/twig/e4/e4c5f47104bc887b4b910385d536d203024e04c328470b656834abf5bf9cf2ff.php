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
        $__internal_319e71a98828817a21b31610e9b08c29535cca990aeadd6b1d0d6767c5322ee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_319e71a98828817a21b31610e9b08c29535cca990aeadd6b1d0d6767c5322ee9->enter($__internal_319e71a98828817a21b31610e9b08c29535cca990aeadd6b1d0d6767c5322ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHomeBundle:Default:index.html.twig"));

        $__internal_8aa51269a76192ae8cfc7a0776ee1a95e5039b1edc4251d4292927efcec3d8ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa51269a76192ae8cfc7a0776ee1a95e5039b1edc4251d4292927efcec3d8ea->enter($__internal_8aa51269a76192ae8cfc7a0776ee1a95e5039b1edc4251d4292927efcec3d8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHomeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319e71a98828817a21b31610e9b08c29535cca990aeadd6b1d0d6767c5322ee9->leave($__internal_319e71a98828817a21b31610e9b08c29535cca990aeadd6b1d0d6767c5322ee9_prof);

        
        $__internal_8aa51269a76192ae8cfc7a0776ee1a95e5039b1edc4251d4292927efcec3d8ea->leave($__internal_8aa51269a76192ae8cfc7a0776ee1a95e5039b1edc4251d4292927efcec3d8ea_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_25b3b895433d75d8ad70f2b5f72244080a5028b47763a230ea75eeba7ddf79f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25b3b895433d75d8ad70f2b5f72244080a5028b47763a230ea75eeba7ddf79f0->enter($__internal_25b3b895433d75d8ad70f2b5f72244080a5028b47763a230ea75eeba7ddf79f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_76ccbadf82c3e1c897c07a753ad8edb3c5ddefe6342edb26a6d0b1999dbcd8b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ccbadf82c3e1c897c07a753ad8edb3c5ddefe6342edb26a6d0b1999dbcd8b4->enter($__internal_76ccbadf82c3e1c897c07a753ad8edb3c5ddefe6342edb26a6d0b1999dbcd8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_76ccbadf82c3e1c897c07a753ad8edb3c5ddefe6342edb26a6d0b1999dbcd8b4->leave($__internal_76ccbadf82c3e1c897c07a753ad8edb3c5ddefe6342edb26a6d0b1999dbcd8b4_prof);

        
        $__internal_25b3b895433d75d8ad70f2b5f72244080a5028b47763a230ea75eeba7ddf79f0->leave($__internal_25b3b895433d75d8ad70f2b5f72244080a5028b47763a230ea75eeba7ddf79f0_prof);

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
