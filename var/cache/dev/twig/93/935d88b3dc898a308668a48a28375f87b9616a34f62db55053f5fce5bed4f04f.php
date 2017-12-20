<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_eebf265b945351ff1ae5e8fbf136104642ccdcfb0407c89cb770a87f07478daf extends Twig_Template
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
        $__internal_c5f84fcdbe450d04babff78f969be940233913612d07e9c13a90997a52c7eb04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f84fcdbe450d04babff78f969be940233913612d07e9c13a90997a52c7eb04->enter($__internal_c5f84fcdbe450d04babff78f969be940233913612d07e9c13a90997a52c7eb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_1e6d5209e3e0f35769c77767170b9eab28e66c87e8db74c743db172e9860ea10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6d5209e3e0f35769c77767170b9eab28e66c87e8db74c743db172e9860ea10->enter($__internal_1e6d5209e3e0f35769c77767170b9eab28e66c87e8db74c743db172e9860ea10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_c5f84fcdbe450d04babff78f969be940233913612d07e9c13a90997a52c7eb04->leave($__internal_c5f84fcdbe450d04babff78f969be940233913612d07e9c13a90997a52c7eb04_prof);

        
        $__internal_1e6d5209e3e0f35769c77767170b9eab28e66c87e8db74c743db172e9860ea10->leave($__internal_1e6d5209e3e0f35769c77767170b9eab28e66c87e8db74c743db172e9860ea10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
