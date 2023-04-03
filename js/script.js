let autocomplete;
let autocompletee; 
function initAutocomplete() {
autocomplete = new google.maps.places.Autocomplete(
document.getElementById('autocomplete'),
{
  types:['establishment'],
  componentRestriction:{'country':['FR']},
  fields:['place_id','geometry','name']
}
);
autocompletee = new google.maps.places.Autocomplete(
  document.getElementById('autocompletee'),
  {
    types:['establishment'],
    componentRestriction:{'country':['FR']},
    fields:['place_id','geometry','name']
  }
  )



}