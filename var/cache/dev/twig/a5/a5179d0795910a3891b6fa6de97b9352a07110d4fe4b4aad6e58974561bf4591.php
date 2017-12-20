<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_6dd41b801e6a50022737e0bf1d19944e941bfd25e53f8108a93a0bd4adf43c92 extends Twig_Template
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
        $__internal_89fd7429c11b269ff278d9eed06ce88c4dbc03a9aac421a2b8f602ba0db20b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89fd7429c11b269ff278d9eed06ce88c4dbc03a9aac421a2b8f602ba0db20b9c->enter($__internal_89fd7429c11b269ff278d9eed06ce88c4dbc03a9aac421a2b8f602ba0db20b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_df825c7e25c77e667ed03a76cfd1c9825c9b3b9b4193b44a39894360e11f415c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df825c7e25c77e667ed03a76cfd1c9825c9b3b9b4193b44a39894360e11f415c->enter($__internal_df825c7e25c77e667ed03a76cfd1c9825c9b3b9b4193b44a39894360e11f415c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_89fd7429c11b269ff278d9eed06ce88c4dbc03a9aac421a2b8f602ba0db20b9c->leave($__internal_89fd7429c11b269ff278d9eed06ce88c4dbc03a9aac421a2b8f602ba0db20b9c_prof);

        
        $__internal_df825c7e25c77e667ed03a76cfd1c9825c9b3b9b4193b44a39894360e11f415c->leave($__internal_df825c7e25c77e667ed03a76cfd1c9825c9b3b9b4193b44a39894360e11f415c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
