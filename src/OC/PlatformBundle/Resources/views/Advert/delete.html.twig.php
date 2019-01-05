{# src/OC/PlatformBundle/Resources/views/Advert/delete.html.twig #}

{% extends "OCPlatformBundle::layout.html.twig" %}

{% block title %}
Supprimer une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

<h2>Supprimer une annonce</h2>

<p>
    Etes-vous certain de vouloir supprimer l'annonce "{{ advert.title }}" ?
</p>

{# On met l'id de l'annonce dans la route de l'action du formulaire #}
<form action="{{ path('oc_platform_delete', {'id': advert.id}) }}" method="post">
    <a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">
        <i class="glyphicon glyphicon-chevron-left"></i>
        Retour à l'annonce
    </a>
    {# Ici j'ai écrit le bouton de soumission à la main #}
    <input type="submit" value="Supprimer" class="btn btn-danger" />
    {# Ceci va générer le champ CSRF #}
    {{ form_rest(form) }}
</form>

{% endblock %}