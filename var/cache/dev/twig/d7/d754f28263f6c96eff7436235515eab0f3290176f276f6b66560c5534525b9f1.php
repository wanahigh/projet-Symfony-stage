<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_0cbf792d60ebb0b97679955a7d4cf86ffe937d42261467bb639189577a491ad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eafc46560c3a989734abe493594b71a76cc0b3dd65e44a4211699ecbbe9f8f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eafc46560c3a989734abe493594b71a76cc0b3dd65e44a4211699ecbbe9f8f6e->enter($__internal_eafc46560c3a989734abe493594b71a76cc0b3dd65e44a4211699ecbbe9f8f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_cd4a8c775be2a2efce46f1605cb6b57bd7d5047126e86e403980e13387a5f444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4a8c775be2a2efce46f1605cb6b57bd7d5047126e86e403980e13387a5f444->enter($__internal_cd4a8c775be2a2efce46f1605cb6b57bd7d5047126e86e403980e13387a5f444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eafc46560c3a989734abe493594b71a76cc0b3dd65e44a4211699ecbbe9f8f6e->leave($__internal_eafc46560c3a989734abe493594b71a76cc0b3dd65e44a4211699ecbbe9f8f6e_prof);

        
        $__internal_cd4a8c775be2a2efce46f1605cb6b57bd7d5047126e86e403980e13387a5f444->leave($__internal_cd4a8c775be2a2efce46f1605cb6b57bd7d5047126e86e403980e13387a5f444_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_81fa5b2e0288e672bec34238946a96b35b212340b5a41fea33ce44260adf185f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81fa5b2e0288e672bec34238946a96b35b212340b5a41fea33ce44260adf185f->enter($__internal_81fa5b2e0288e672bec34238946a96b35b212340b5a41fea33ce44260adf185f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba4b2c5497e81884f5e1da3722c45505353aad84c5ae3fc597c3ac0c0721b480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4b2c5497e81884f5e1da3722c45505353aad84c5ae3fc597c3ac0c0721b480->enter($__internal_ba4b2c5497e81884f5e1da3722c45505353aad84c5ae3fc597c3ac0c0721b480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 8
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_ba4b2c5497e81884f5e1da3722c45505353aad84c5ae3fc597c3ac0c0721b480->leave($__internal_ba4b2c5497e81884f5e1da3722c45505353aad84c5ae3fc597c3ac0c0721b480_prof);

        
        $__internal_81fa5b2e0288e672bec34238946a96b35b212340b5a41fea33ce44260adf185f->leave($__internal_81fa5b2e0288e672bec34238946a96b35b212340b5a41fea33ce44260adf185f_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80b352b8a665b90595aabf58866db3b515fae43f97d0602c69468c0667a48f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b352b8a665b90595aabf58866db3b515fae43f97d0602c69468c0667a48f08->enter($__internal_80b352b8a665b90595aabf58866db3b515fae43f97d0602c69468c0667a48f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3f6669f489e93c173fb78c9bafa70232a71629fbaaf400da1a3b9c14a5c839da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6669f489e93c173fb78c9bafa70232a71629fbaaf400da1a3b9c14a5c839da->enter($__internal_3f6669f489e93c173fb78c9bafa70232a71629fbaaf400da1a3b9c14a5c839da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_3f6669f489e93c173fb78c9bafa70232a71629fbaaf400da1a3b9c14a5c839da->leave($__internal_3f6669f489e93c173fb78c9bafa70232a71629fbaaf400da1a3b9c14a5c839da_prof);

        
        $__internal_80b352b8a665b90595aabf58866db3b515fae43f97d0602c69468c0667a48f08->leave($__internal_80b352b8a665b90595aabf58866db3b515fae43f97d0602c69468c0667a48f08_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  57 => 8,  55 => 7,  50 => 4,  41 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {% block fos_user_content %}{% endblock %}
            </div>
        </div>
    </div>
{% endblock %}", "FOSUserBundle::layout.html.twig", "/var/www/html/Projet-Symfony-master/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
