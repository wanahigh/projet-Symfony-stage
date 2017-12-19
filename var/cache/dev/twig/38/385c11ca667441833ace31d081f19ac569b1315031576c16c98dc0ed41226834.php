<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c09c65e749ddb5e5503aa8ace49b9c164a1635795f580df8248d2740dab027df extends Twig_Template
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
        $__internal_c9ba95d95e4a0a78c824866e813c6441b97b5d3ef7111ed62be31602fc0d3792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9ba95d95e4a0a78c824866e813c6441b97b5d3ef7111ed62be31602fc0d3792->enter($__internal_c9ba95d95e4a0a78c824866e813c6441b97b5d3ef7111ed62be31602fc0d3792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_86ec9c54086c4fae55cc96f7ad7727237f43e3c9e4a5bc387578cb85434b080d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ec9c54086c4fae55cc96f7ad7727237f43e3c9e4a5bc387578cb85434b080d->enter($__internal_86ec9c54086c4fae55cc96f7ad7727237f43e3c9e4a5bc387578cb85434b080d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c9ba95d95e4a0a78c824866e813c6441b97b5d3ef7111ed62be31602fc0d3792->leave($__internal_c9ba95d95e4a0a78c824866e813c6441b97b5d3ef7111ed62be31602fc0d3792_prof);

        
        $__internal_86ec9c54086c4fae55cc96f7ad7727237f43e3c9e4a5bc387578cb85434b080d->leave($__internal_86ec9c54086c4fae55cc96f7ad7727237f43e3c9e4a5bc387578cb85434b080d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
