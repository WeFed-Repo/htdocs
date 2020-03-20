export default function getDisplayName(WrappedComponent) {
    return WrappedComponent ? (WrappedComponent.displayName || WrappedComponent.name || 'Component') : 'Null';
}