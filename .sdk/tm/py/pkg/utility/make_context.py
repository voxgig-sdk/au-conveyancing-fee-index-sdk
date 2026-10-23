# AuConveyancingFeeIndex SDK utility: make_context

from projectname_sdk.core.context import AuConveyancingFeeIndexContext


def make_context_util(ctxmap, basectx):
    return AuConveyancingFeeIndexContext(ctxmap, basectx)
