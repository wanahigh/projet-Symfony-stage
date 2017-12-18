<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7f5de655ec9b716f973a6c72cc00ee386b00c59de52a752d52522d8dcd429a9d extends Twig_Template
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
        $__internal_2fe9946595a23496ca35fc580218306a342e05a0435dded78237b1c767c435a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe9946595a23496ca35fc580218306a342e05a0435dded78237b1c767c435a8->enter($__internal_2fe9946595a23496ca35fc580218306a342e05a0435dded78237b1c767c435a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_928f6c019e32ab8f985f4eee6fdada4a7a9db063727bb0cc4b9c0999da801d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928f6c019e32ab8f985f4eee6fdada4a7a9db063727bb0cc4b9c0999da801d26->enter($__internal_928f6c019e32ab8f985f4eee6fdada4a7a9db063727bb0cc4b9c0999da801d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2fe9946595a23496ca35fc580218306a342e05a0435dded78237b1c767c435a8->leave($__internal_2fe9946595a23496ca35fc580218306a342e05a0435dded78237b1c767c435a8_prof);

        
        $__internal_928f6c019e32ab8f985f4eee6fdada4a7a9db063727bb0cc4b9c0999da801d26->leave($__internal_928f6c019e32ab8f985f4eee6fdada4a7a9db063727bb0cc4b9c0999da801d26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
