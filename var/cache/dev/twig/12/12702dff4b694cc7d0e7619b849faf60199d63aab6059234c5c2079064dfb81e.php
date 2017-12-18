<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_3c91a58fb73f2e39eecca3c3988711d4fcd17476b413cced255703c7e475fbc6 extends Twig_Template
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
        $__internal_9fc0cc21c37a6af18524057405b8b8e838df59cb4685c5451a653ffb9ec03bda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc0cc21c37a6af18524057405b8b8e838df59cb4685c5451a653ffb9ec03bda->enter($__internal_9fc0cc21c37a6af18524057405b8b8e838df59cb4685c5451a653ffb9ec03bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_189d2f24eec2a8b5e4266f3c8127eeb4840ab3254bcb2be0629980a869f016ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189d2f24eec2a8b5e4266f3c8127eeb4840ab3254bcb2be0629980a869f016ac->enter($__internal_189d2f24eec2a8b5e4266f3c8127eeb4840ab3254bcb2be0629980a869f016ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9fc0cc21c37a6af18524057405b8b8e838df59cb4685c5451a653ffb9ec03bda->leave($__internal_9fc0cc21c37a6af18524057405b8b8e838df59cb4685c5451a653ffb9ec03bda_prof);

        
        $__internal_189d2f24eec2a8b5e4266f3c8127eeb4840ab3254bcb2be0629980a869f016ac->leave($__internal_189d2f24eec2a8b5e4266f3c8127eeb4840ab3254bcb2be0629980a869f016ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
