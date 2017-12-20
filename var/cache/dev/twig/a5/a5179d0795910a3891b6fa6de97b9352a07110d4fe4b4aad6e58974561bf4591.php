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
        $__internal_ea661c51ef01511f0ed3589bb96a1ad102b67f64234211c85697ef0556db11fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea661c51ef01511f0ed3589bb96a1ad102b67f64234211c85697ef0556db11fd->enter($__internal_ea661c51ef01511f0ed3589bb96a1ad102b67f64234211c85697ef0556db11fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_56e8699977cbe2bbcc79d21453fcaf2ce3b6725d7abb9c2d1b6e66fb766cf348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e8699977cbe2bbcc79d21453fcaf2ce3b6725d7abb9c2d1b6e66fb766cf348->enter($__internal_56e8699977cbe2bbcc79d21453fcaf2ce3b6725d7abb9c2d1b6e66fb766cf348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ea661c51ef01511f0ed3589bb96a1ad102b67f64234211c85697ef0556db11fd->leave($__internal_ea661c51ef01511f0ed3589bb96a1ad102b67f64234211c85697ef0556db11fd_prof);

        
        $__internal_56e8699977cbe2bbcc79d21453fcaf2ce3b6725d7abb9c2d1b6e66fb766cf348->leave($__internal_56e8699977cbe2bbcc79d21453fcaf2ce3b6725d7abb9c2d1b6e66fb766cf348_prof);

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
