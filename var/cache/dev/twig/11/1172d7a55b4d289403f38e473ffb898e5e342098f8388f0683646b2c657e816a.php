<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a1dfef49ced178fcd7e9b20802ae33ed2e9761120896d10fb98487532b2e7ce4 extends Twig_Template
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
        $__internal_1161e8c76448ea729bb063a83488bb51dc0bdc66dff370e5c00769e98a0fa4f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1161e8c76448ea729bb063a83488bb51dc0bdc66dff370e5c00769e98a0fa4f8->enter($__internal_1161e8c76448ea729bb063a83488bb51dc0bdc66dff370e5c00769e98a0fa4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_8715b8c75c3286ca8fe505fe84b9496d1d73110dab1e2b9933c782acd07744ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8715b8c75c3286ca8fe505fe84b9496d1d73110dab1e2b9933c782acd07744ba->enter($__internal_8715b8c75c3286ca8fe505fe84b9496d1d73110dab1e2b9933c782acd07744ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_1161e8c76448ea729bb063a83488bb51dc0bdc66dff370e5c00769e98a0fa4f8->leave($__internal_1161e8c76448ea729bb063a83488bb51dc0bdc66dff370e5c00769e98a0fa4f8_prof);

        
        $__internal_8715b8c75c3286ca8fe505fe84b9496d1d73110dab1e2b9933c782acd07744ba->leave($__internal_8715b8c75c3286ca8fe505fe84b9496d1d73110dab1e2b9933c782acd07744ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
