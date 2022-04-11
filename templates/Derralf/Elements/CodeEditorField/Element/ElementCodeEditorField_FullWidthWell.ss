
<div class="element__container-breakout">
    <div class="well">
      <% if $ShowTitle %>
        <% include Derralf\\Elements\\CodeEditorField\\Title %>
      <% end_if %>

      <% if $HTML %>
        <div class="element__content">$HTML</div>
      [ HIER der CODE]
      <% end_if %>
    </div>
</div>

