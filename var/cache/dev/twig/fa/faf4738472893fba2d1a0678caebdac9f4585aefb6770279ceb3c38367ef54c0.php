<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fea366a6e6ea40873f70ebdc4182fddc4a73c9db5a72706ff8b614b54e8aa012 extends Twig_Template
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
        $__internal_967d4f8e35888ebb338eba55e5c2349e4cbf311603a36a13920fc4164257d56e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_967d4f8e35888ebb338eba55e5c2349e4cbf311603a36a13920fc4164257d56e->enter($__internal_967d4f8e35888ebb338eba55e5c2349e4cbf311603a36a13920fc4164257d56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_29a52b9367687b335ee940fd6b29c094a15f1d9aeb23185b8af8210fbf006fc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a52b9367687b335ee940fd6b29c094a15f1d9aeb23185b8af8210fbf006fc8->enter($__internal_29a52b9367687b335ee940fd6b29c094a15f1d9aeb23185b8af8210fbf006fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_967d4f8e35888ebb338eba55e5c2349e4cbf311603a36a13920fc4164257d56e->leave($__internal_967d4f8e35888ebb338eba55e5c2349e4cbf311603a36a13920fc4164257d56e_prof);

        
        $__internal_29a52b9367687b335ee940fd6b29c094a15f1d9aeb23185b8af8210fbf006fc8->leave($__internal_29a52b9367687b335ee940fd6b29c094a15f1d9aeb23185b8af8210fbf006fc8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
