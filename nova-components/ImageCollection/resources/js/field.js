import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-image-collection', IndexField)
  app.component('detail-image-collection', DetailField)
  app.component('form-image-collection', FormField)
})
