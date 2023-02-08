import * as yup from 'yup';

import { ERROR_MESSAGES } from '../constants';

export const validationSchema = yup.object({
  firstName: yup
    .string()
    .max(20, ERROR_MESSAGES.LENGTH(20))
    .required(ERROR_MESSAGES.REQUIRED),
  email: yup
    .string()
    .max(40, ERROR_MESSAGES.LENGTH(40))
    .email(ERROR_MESSAGES.EMAIL)
    .required(ERROR_MESSAGES.REQUIRED),
  phone: yup.string().max(11, ERROR_MESSAGES.LENGTH(11)),
  message: yup.mixed().required(ERROR_MESSAGES.REQUIRED),
});
