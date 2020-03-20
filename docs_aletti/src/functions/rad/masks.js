export const createMask = function (length, mask) {
    return Array(length).fill(mask);
};

export const masks = {
    name: createMask(50, /[^\d]/),
    num: createMask(50, /\d/)
};