import Loadable from 'react-loadable';
import fakeDelay from 'functions/fakeDelay';
import withLoading from 'components/wrappers/withLoading';

const delay = 0;
const loader = (importer) => Loadable({
    loader: () => fakeDelay(delay).then(importer),
    loading: withLoading(null),
});

export default loader;