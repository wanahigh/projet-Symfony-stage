<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f99e02fe4a229633f2654944d416bc22a84dd54593204dce3594ac26214ddfc4 extends Twig_Template
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
        $__internal_c709d6d13bd996e7789100e1dc4ba069a6495b410d28c5e2f0c3f3a1ab8a50fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c709d6d13bd996e7789100e1dc4ba069a6495b410d28c5e2f0c3f3a1ab8a50fb->enter($__internal_c709d6d13bd996e7789100e1dc4ba069a6495b410d28c5e2f0c3f3a1ab8a50fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_0865a0b82b1e4ef06b88fa22aab70841041c0997d13f99d570a88ef8bedd172d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0865a0b82b1e4ef06b88fa22aab70841041c0997d13f99d570a88ef8bedd172d->enter($__internal_0865a0b82b1e4ef06b88fa22aab70841041c0997d13f99d570a88ef8bedd172d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c709d6d13bd996e7789100e1dc4ba069a6495b410d28c5e2f0c3f3a1ab8a50fb->leave($__internal_c709d6d13bd996e7789100e1dc4ba069a6495b410d28c5e2f0c3f3a1ab8a50fb_prof);

        
        $__internal_0865a0b82b1e4ef06b88fa22aab70841041c0997d13f99d570a88ef8bedd172d->leave($__internal_0865a0b82b1e4ef06b88fa22aab70841041c0997d13f99d570a88ef8bedd172d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
