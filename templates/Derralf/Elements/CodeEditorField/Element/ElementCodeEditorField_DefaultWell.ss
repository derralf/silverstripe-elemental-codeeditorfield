
    <div class="well">
      <% if $ShowTitle %>
        <% include Derralf\\Elements\\CodeEditorField\\Title %>
      <% end_if %>

      <% if $HTML %>
        <div class="element__content">$HTML</div>
      <% end_if %>
    </div>

